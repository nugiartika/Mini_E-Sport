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
use PHPUnit\Event\Code\Throwable;

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
        return Tournament::find($tournamentId);
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
        if (Auth::user()->role === 'user') {
            $transactionData = $this->transaction->with([
                'teamTournament.toTeam' => function ($query) {
                    $query->where('user_id', Auth::id());
                }
            ]);
        }

        $transactionData = $transactionData->latest()->paginate(20);
        $getPaymentList = $this->paymentService->getPaymentList();
        $paymentList = collect($getPaymentList['data']);

        return view('transaction.index', compact('transactionData', 'paymentList'));
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
            $userData = $this->getUser($data->get('user_id'));
            $tourData = $this->getTournament($data->get('team_tournament_id'));

            $transaction = $this->paymentService->createTransaction(
                $tourData->nominal,
                $userData->name,
                $userData->email,
                $data->get('payment_method'),
                '081234567890',
                [
                    [
                        'sku'         => "TOURNAMENT-{$tourData->id}",
                        'name'        => "Pendaftaran Turnamen {$tourData->name}",
                        'price'       => $tourData->nominal,
                        'quantity'    => 1,
                        'product_url' => 'https://tokokamu.com/product/nama-produk-1',
                        'image_url'   => 'https://tokokamu.com/product/nama-produk-1.jpg',
                    ],
                ],
                route('transaction.index')
            );

            if (!is_array($transaction['data'])) {
                throw new \Exception('Permintaan tidak dapat diproses');
            }

            $data->put('ref_id', $transaction['data']['reference']);
            $data->put('amount', $transaction['data']['amount']);
            $data->put('transaction_id', $transaction['data']['merchant_ref']);
            $data->put('name', $transaction['data']['customer_name']);
            $data->put('email', $transaction['data']['customer_email']);
            $data->put('phone', $transaction['data']['customer_phone']);

            $data->forget('user_id');

            $transactionData = $this->transaction->create($data->all());

            return redirect()->route('transaction.show', $transactionData->ref_id);
        } catch (\Throwable $th) {
            abort(500, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        try {
            $paymentDetail = $this->paymentService->getTransactionDetail($transaction->ref_id);
            $getPaymentList = $this->paymentService->getPaymentList();
            $paymentList = collect($getPaymentList['data']);

            return view('transaction.view', compact('transaction', 'paymentDetail', 'paymentList'));
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
        //
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
            Log::error('Tidak dapat melakukan penghapusan. Karena: '. $e->getMessage());
            return redirect()->back()->with('error', 'Tidak dapat melakukan penghapusan. Karena: '. $e->getMessage());
        } catch (\Throwable $th) {
            Log::error('Tidak dapat melakukan penghapusan. Karena: '. $th->getMessage());
            return redirect()->back()->with('error', 'Tidak dapat melakukan penghapusan. Karena: '. $th->getMessage());
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
        } catch (\Symfony\Component\HttpKernel\Exception\HttpExceptionInterface $hei) {
            return response()->json([
                'success' => false,
                'message' => $hei->getMessage(),
                'code' => $hei->getCode() ?? 500,
            ], 500);
        }
    }
}
