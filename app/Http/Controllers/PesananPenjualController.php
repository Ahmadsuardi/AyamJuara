<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\DetailPesanan;
use Illuminate\Support\Facades\Auth;

class PesananPenjualController extends Controller
{
    public function index()
    {
        $pesanan = DetailPesanan::whereHas('ayam', function($q) {
            $q->where('user_id', Auth::id());
        })->with(['pesanan', 'ayam'])->get();

        return view('penjual.pesanan.index', compact('pesanan'));
    }

    public function updateStatus($id, $status)
    {
        $detail = DetailPesanan::findOrFail($id);
        $detail->pesanan->update(['status' => $status]);
        return back()->with('success', 'Status pesanan diperbarui.');
    }
}
