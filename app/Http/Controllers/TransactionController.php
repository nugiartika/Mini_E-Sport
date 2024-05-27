<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\TeamTournament;
use App\Models\Tournament;
use App\Models\User;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    private Transaction $transaction;
    protected PaymentService $paymentService;

    public function __construct()
    {
        // $this->middleware('auth');
        $this->transaction = new Transaction();
        $this->paymentService = new PaymentService();
    }

    private function getTournament(int $tournamentId)
    {
        return TeamTournament::find($tournamentId)->tournament;
    }

    private function getUser(int $userId)
    {
        return User::find($userId);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
        $transactionData = $this->transaction->where('payment_method', '!=', 'FREE')->when(Auth::user()->role === 'user', function ($query) {
            $query->with([
                'teamTournament.toTeam' => function ($query) {
                    $query->where('user_id', Auth::id());
                },
            ]);
        });

        $transactionData = $transactionData->latest()->paginate(20);
        $paymentList = $this->paymentService->getPaymentList();

        return view('transaction.index', compact('transactionData', 'paymentList', 'counttournaments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'tournament_id' => 'exists:team_tournaments,id|required'
        ]);

        $eventData = TeamTournament::find($request->tournament_id);
        $paymentList = $this->paymentService->getPaymentList();

        return view('transaction.create', compact('paymentList', 'eventData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        $data = collect($request->validated());

        try {
            $userData = $this->getUser($request->input('user_id'));
            $tourData = $this->getTournament((int) $request->input('team_tournament_id'));
            $paymentList = $this->paymentService->getPaymentList();

            $amountTotal = (int)$tourData->nominal + (int)$paymentList->where('code', $request->payment_method)->first()['fee'];

            $data->put('ref_id', "INV-". Str::upper(Str::random(16)));
            $data->put('amount', $amountTotal);
            $data->put('transaction_id', "TRANS-". Str::upper(Str::random(16)));
            $data->put('name', $userData->name);
            $data->put('email', $userData->email);
            $data->put('phone', '081234567890');
            $data->put('status', 'PENDING');

            $data->forget('user_id');

            $transactionData = $this->transaction->create($data->all());

            return redirect()->route('transaction.show', $transactionData->transaction_id);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            abort(500, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        try {
            $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
            $paymentList = $this->paymentService->getPaymentList();

            return view('transaction.view', compact('transaction', 'paymentList', 'counttournaments'));
        } catch (\Throwable $th) {
            abort(500, $th->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        $data = collect($request->validated());

        try {
            $transaction->update($data->all());

            return redirect()->route('transaction.show', $transaction->transaction_id);
        } catch (\Throwable $th) {
            abort(500, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        try {
            $transaction->delete();
            return redirect()->back()->with('success', 'Data berhasil di hapus');
        } catch (\Exception $e) {
            Log::error('Tidak dapat melakukan penghapusan. Karena: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Tidak dapat melakukan penghapusan. Karena: ' . $e->getMessage());
        } catch (\Throwable $th) {
            Log::error('Tidak dapat melakukan penghapusan. Karena: ' . $th->getMessage());
            return redirect()->back()->with('error', 'Tidak dapat melakukan penghapusan. Karena: ' . $th->getMessage());
        }
    }

    /**
     * Callback for tripay payment gateway
     */
    public function callback(Request $request)
    {
        $callbackSignature = $request->server('HTTP_X_CALLBACK_SIGNATURE');
        $json = $request->getContent();
        $signature = hash_hmac('sha256', $json, $this->paymentService->secret);

        if ($signature !== (string) $callbackSignature) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid signature',
                'code' => 400,
            ], 400);
        }

        if ('payment_status' !== (string) $request->server('HTTP_X_CALLBACK_EVENT')) {
            return response()->json([
                'success' => false,
                'message' => 'Unrecognized callback event, no action was taken',
                'code' => 400,
            ], 400);
        }

        $data = json_decode($json);

        if (JSON_ERROR_NONE !== json_last_error()) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid data sent by tripay',
                'code' => 400,
            ], 400);
        }

        try {
            $transactionData = $this->transaction->where('ref_id', $request->input('reference'))->firstOrFail();

            $response = collect($request->only('status'));
            $response->put('ref_id', $request->input('reference'));

            $transactionData->update($response->toArray());

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'code' => $e->getCode() ?? 500,
            ], 500);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
                'code' => $th->getCode() ?? 500,
            ], 500);
        } catch (\Symfony\Component\HttpKernel\Exception\HttpExceptionInterface $http) {
            return response()->json([
                'success' => false,
                'message' => $http->getMessage(),
                'code' => $http->getCode() ?? 404,
            ], 404);
        }
    }
}
