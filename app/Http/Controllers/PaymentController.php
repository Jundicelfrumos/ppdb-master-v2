<?php

namespace App\Http\Controllers;
use App\Models\Payment;

use Illuminate\Http\Request;
use Alert;

class PaymentController extends Controller
{
    public function index()
    {
        return view ('form/payment');
    }

    public function buktiTranferPost(Request $request)
    {

        // dd($request->all());
        $bukti = null;
            if ($request->bukti_pembayaran) {
                $bukti = $request->bukti_pembayaran->store('data', 'public');
            }
        Payment::query()->create([
            'user_id' => $request->userId,
            'bukti_pembayaran' => $bukti
           ]);

           Alert::success('Pendaftaran Berhasil!','.');
           return view ('home');
    }
}
