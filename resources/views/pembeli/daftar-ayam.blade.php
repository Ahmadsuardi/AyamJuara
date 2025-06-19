@extends('pembeli.index') {{-- Sesuaikan jika nama filenya bukan 'master' --}}

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Daftar Ayam Tersedia</h1>

    <div class="row">
        @foreach ($daftarAyam as $ayam)
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100">
                    @if($ayam->gambar)
                        <img src="{{ asset('storage/' . $ayam->gambar) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Gambar Ayam">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $ayam->nama }}</h5>
                        <p class="card-text">Harga: Rp{{ number_format($ayam->harga, 0, ',', '.') }}</p>
                        <p class="card-text">Stok: {{ $ayam->stok }}</p>
                        <p class="card-text">Penjual: <strong>{{ $ayam->penjual->name }}</strong></p>
                        <p class="card-text"><em>{{ $ayam->description }}</em></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
