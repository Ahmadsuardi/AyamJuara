<?php

namespace App\Http\Controllers;

use App\Models\Ayam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AyamController extends Controller
{
    public function index()
    {
        $ayams = Ayam::where('user_id', Auth::id())->get();
        return view('penjual.ayam.index', compact('ayams'));
    }

    public function create()
    {
        return view('penjual.ayam.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
        ]);

        Ayam::create([
            'user_id' => Auth::id(),
            'nama' => $request->nama,
            'harga' => $request->harga,
            'description' => $request->description,
            'gambar' => $request->gambar,
            'stok' => true,
        ]);

        return redirect()->route('ayam.index')->with('success', 'Produk ayam berhasil ditambahkan.');
    }

    public function edit(Ayam $ayam)
    {
        return view('penjual.ayam.edit', compact('ayam'));
    }

    public function update(Request $request, Ayam $ayam)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
        ]);

        $ayam->update($request->all());

        return redirect()->route('ayam.index')->with('success', 'Produk ayam berhasil diperbarui.');
    }

    public function destroy(Ayam $ayam)
    {
        $ayam->delete();
        return back()->with('success', 'Produk ayam dihapus.');
    }
}
