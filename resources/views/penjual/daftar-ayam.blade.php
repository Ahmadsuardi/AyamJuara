@extends('penjual.index')

@section('content')
<div class="container">
    <h2>Daftar Ayam</h2>
    <a href="{{ route('penjual.create') }}" class="btn btn-primary mb-3">Tambah Ayam</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ayam as $a)
                <tr>
                    <td>{{ $a->nama }}</td>
                    <td>Rp{{ number_format($a->harga, 0, ',', '.') }}</td>
                    <td>{{ $a->stok }}</td>
                    <td>{{ $a->description }}</td>
                    <td>
                        @if($a->gambar)
                            <img src="{{ asset('storage/' . $a->gambar) }}" width="100">
                        @else
                            Tidak ada
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('penjual.edit', $a) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('penjual.destroy', $a) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus ayam ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
