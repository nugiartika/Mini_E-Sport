<?php

namespace App\Http\Controllers;

use App\Models\PaymentProof;
use App\Http\Requests\StorePaymentProofRequest;
use App\Http\Requests\UpdatePaymentProofRequest;
use Illuminate\Support\Facades\Storage;

class PaymentProofController extends Controller
{
    private PaymentProof $_paymentProof;

    public function __construct()
    {
        $this->_paymentProof = new PaymentProof();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentProofs = $this->_paymentProof->paginate(20);

        return view('transaction-proof.index', compact('paymentProofs'));
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
            $paymentProof->transaction->update(['status' => $request->status == 1 ? 'PAID' : 'UNPAID']);

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
