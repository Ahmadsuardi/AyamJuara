<?php


namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\Ayam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::where('user_id', Auth::id())->with('detailPesanan.ayam')->get();
        return view('pembeli.user.index', compact('pesanans'));
    }

    public function create()
    {
        $ayams = Ayam::where('stok', true)->get();
        return view('pembeli.pesanan.create', compact('ayams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ayam_id' => 'required|array',
            'jumlah.*' => 'required|numeric|min:1',
        ]);

        $pesanan = Pesanan::create([
            'user_id' => Auth::id(),
            'tanggal_pesanan' => now(),
            'status' => 'proses',
        ]);

        foreach ($request->ayam_id as $index => $id_ayam) {
            $ayam = Ayam::find($id_ayam);
            $jumlah = $request->jumlah[$index];
            $subtotal = $ayam->harga * $jumlah;

            DetailPesanan::create([
                'pesanan_id' => $pesanan->id,
                'ayam_id' => $id_ayam,
                'jumlah' => $jumlah,
                'subtotal' => $subtotal,
            ]);
        }

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dibuat.');
    }

    public function destroy($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();
        return back()->with('success', 'Pesanan dihapus.');
    }
}
