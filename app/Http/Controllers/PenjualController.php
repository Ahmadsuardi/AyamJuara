<?php

namespace App\Http\Controllers;

use App\Models\Ayam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenjualController extends Controller
{
    public function index(){
        $ayam = Ayam::where('user_id', Auth::id())->get();
        return view('penjual.daftar-ayam', compact('ayam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjual.tambah-ayam');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'description' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('gambar', 'public');
        }

        Ayam::create([
            'user_id' => Auth::id(),
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'description' => $request->description,
            'gambar' => $gambarPath,
        ]);

         return redirect()->route('penjual.index');
    }

    /**
     * Display the specified resource.
     */
    public function dashboard()
    {
        $jumlahAyam = Ayam::where('user_id', Auth::id())->sum('stok');
        return view('penjual.dashboard', compact('jumlahAyam'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ayam $ayam)
    {
         // Opsional: Pastikan hanya pemilik yang bisa edit
        return view('penjual.edit-ayam', compact('ayam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ayam $ayam)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'description' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('gambar', 'public');
            $ayam->gambar = $gambarPath;
        }

        $ayam->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'description' => $request->description,
        ]);

        return redirect()->route('penjual.index')->with('success', 'Data ayam berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ayam $ayam)
    {
        $ayam->delete();
        return redirect()->route('penjual.index')->with('success', 'Data ayam berhasil dihapus.');
    }
}
