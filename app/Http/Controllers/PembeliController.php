<?php

namespace App\Http\Controllers;

use App\Models\Ayam;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
{
    $daftarAyam = Ayam::with('penjual') // relasi ke user (penjual)
        ->where('stok', '>', 0)
        ->get();

    return view('pembeli.daftar-ayam', compact('daftarAyam'));
}
}
