@extends('penjual.index')

@section('content')
<div class="container">
    <h2>Edit Ayam</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('penjual.update', $ayam->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Ayam</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $ayam->nama) }}">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ old('harga', $ayam->harga) }}">
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ old('stok', $ayam->stok) }}">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ old('description', $ayam->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Gambar Saat Ini</label><br>
            @if($ayam->gambar)
                <img src="{{ asset('storage/' . $ayam->gambar) }}" width="120">
            @else
                Tidak ada gambar
            @endif
        </div>

        <div class="mb-3">
            <label>Ganti Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('penjual.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
