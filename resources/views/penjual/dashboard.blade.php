@extends('penjual.index')

@section('content')
<style>
    .dashboard-card {
        background-color: #f8f9fa;
        border-left: 5px solid #0d6efd;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        transition: 0.3s;
    }

    .dashboard-card:hover {
        transform: scale(1.02);
    }

    .dashboard-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #333;
    }

    .dashboard-value {
        font-size: 2.5rem;
        font-weight: bold;
        color: #0d6efd;
    }

    .dashboard-desc {
        color: #666;
        margin-top: 5px;
    }
</style>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="dashboard-card">
                <div class="dashboard-title">Jumlah Ayam Dijual</div>
                <div class="dashboard-value">{{ $jumlahAyam }}</div>
                <div class="dashboard-desc">Total semua ayam yang berhasil didaftarkan oleh penjual.</div>
            </div>
        </div>
    </div>
</div>

@endsection
