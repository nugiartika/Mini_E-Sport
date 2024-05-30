<?php

namespace App\Http\Controllers;

use App\Models\PaymentProof;
use App\Http\Requests\StorePaymentProofRequest;
use App\Http\Requests\UpdatePaymentProofRequest;
use App\Models\Tournament;
use Illuminate\Support\Facades\Storage;

class PaymentProofController extends Controller
{
    private PaymentProof $_paymentProof;
    private Tournament $_tournament;

    public function __construct()
    {
        $this->_tournament = new Tournament();
        $this->_paymentProof = new PaymentProof();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentProofs = $this->_paymentProof->paginate(20);
        $counttournaments = $this->_tournament->where('users_id', auth()->user()->id)
            ->whereIn('status', ['rejected', 'accepted'])
            ->where('notif', 'belum baca')
            ->count();

        return view('transaction-proof.index', compact('paymentProofs', 'counttournaments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentProofRequest $request)
    {
        try {
            $data = $request->validated();
            $data['file'] = $request->file('file')->store('payment-proofs', 'public');
            $data['user_id'] = auth()->id();
            $data['payment_date'] = now();

            $this->_paymentProof->create($data);

            return back()->with('success', "Berhasil mengunggah bukti pembayaran. Bukti anda akan diperiksa oleh penyelenggara.");
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentProof $paymentProof)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentProof $paymentProof)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentProofRequest $request, PaymentProof $paymentProof)
    {
        try {
            $data = $request->validated();
            $paymentProof->update($data);

            return back()->with('success', "Berhasil memperbaharui bukti pembayaran.");
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentProof $paymentProof)
    {
        try {
            if(Storage::exists($paymentProof->file)) {
                Storage::delete($paymentProof->file);
            }

            $paymentProof->delete();

            return back()->with('success', "Berhasil menghapus bukti pembayaran.");
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
