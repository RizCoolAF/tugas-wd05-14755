@extends('admin.layout.main')

@section('title', 'Dashboard Admin')

@section('content')
<style>
    /* Gaya dasar untuk keterbacaan */
    body {
        font-size: 18px;
        line-height: 1.6;
    }
    
    .dashboard-link {
        text-decoration: none;
        color: inherit;
    }

    .dashboard-card {
        background: #ffffff;
        border-radius: 15px;
        padding: 25px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border: 3px solid #e8f5e9;
        height: 100%;
    }

    .dashboard-card:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .dashboard-icon-wrapper {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        color: #fff;
        border: 3px solid white;
    }

    .dashboard-icon-patient  { background: linear-gradient(135deg, #FFC107, #FFD54F); }
    .dashboard-icon-doctor   { background: linear-gradient(135deg, #4CAF50, #81C784); }
    .dashboard-icon-hospital { background: linear-gradient(135deg, #2196F3, #64B5F6); }
    .dashboard-icon-obat     { background: linear-gradient(135deg, #F44336, #E57373); }

    .dashboard-card h3 {
        font-size: 32px;
        margin: 10px 0;
        font-weight: bold;
        color: #2E7D32;
    }

    .dashboard-card p {
        margin: 0;
        font-size: 18px;
        color: #616161;
    }

    .menu-btn {
        display: block;
        width: 100%;
        padding: 15px;
        border-radius: 12px;
        font-weight: bold;
        font-size: 18px;
        background-color: #2E7D32;
        color: white;
        transition: all 0.3s ease;
        text-align: center;
        border: none;
        margin-bottom: 10px;
    }

    .menu-btn:hover {
        background-color: #1B5E20;
        transform: scale(1.02);
        color: white;
    }

    .card-welcome {
        background: linear-gradient(135deg, #2E7D32, #4CAF50) !important;
        border-radius: 15px;
        padding: 25px;
        color: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .card-welcome h4 {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #fff;
    }

    .card-welcome p {
        margin: 0;
        font-size: 18px;
        color: #e8f5e9;
    }

    .panel-card {
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        border: none;
    }

    .panel-header {
        background-color: white;
        border-bottom: 2px solid #e8f5e9;
        border-radius: 15px 15px 0 0 !important;
        padding: 20px;
    }

    .panel-title {
        font-size: 24px;
        font-weight: bold;
        color: #2E7D32;
        margin: 0;
    }

    .panel-icon {
        font-size: 28px;
        margin-right: 15px;
        color: #2E7D32;
    }

    /* Animasi sederhana */
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    .dashboard-icon-wrapper:hover {
        animation: bounce 0.5s;
    }
</style>

{{-- Welcome Section --}}
<div class="row">
    <div class="col-12">
        <div class="card-welcome d-flex align-items-center">
            <div style="width: 100px; height: 100px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 3px solid #A5D6A7; margin-right: 25px;">
                <i class="fas fa-user-shield fa-3x" style="color: #2E7D32;"></i>
            </div>
            <div>
                <h4>Selamat Datang, {{ Auth::user()->name }}!</h4>
                <p>Anda login sebagai administrator sistem. Silakan kelola data melalui menu berikut.</p>
            </div>
        </div>
    </div>
</div>

{{-- Control Panel --}}
<div class="panel-card">
    <div class="panel-header d-flex align-items-center">
        <i class="fas fa-cogs panel-icon"></i>
        <h5 class="panel-title">Panel Kontrol Cepat</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('admin.pasien.create') }}" class="menu-btn">
                    <i class="fas fa-user-plus me-2"></i> Tambah Pasien
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('admin.dokter.create') }}" class="menu-btn">
                    <i class="fas fa-user-md me-2"></i> Tambah Dokter
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('admin.poli.create') }}" class="menu-btn">
                    <i class="fas fa-hospital me-2"></i> Tambah Poli
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('admin.obat.create') }}" class="menu-btn">
                    <i class="fas fa-pills me-2"></i> Tambah Obat
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Statistics --}}
<div class="panel-card">
    <div class="panel-header d-flex align-items-center">
        <i class="fas fa-chart-pie panel-icon"></i>
        <h5 class="panel-title">Statistik Data</h5>
    </div>
    <div class="card-body">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <a href="{{ route('admin.pasien.index') }}" class="dashboard-link">
                    <div class="dashboard-card text-center">
                        <div class="dashboard-icon-wrapper dashboard-icon-patient">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>{{ $total_pasien }}</h3>
                        <p>Total Pasien</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="{{ route('admin.dokter.index') }}" class="dashboard-link">
                    <div class="dashboard-card text-center">
                        <div class="dashboard-icon-wrapper dashboard-icon-doctor">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3>{{ $total_dokter }}</h3>
                        <p>Total Dokter</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="{{ route('admin.poli.index') }}" class="dashboard-link">
                    <div class="dashboard-card text-center">
                        <div class="dashboard-icon-wrapper dashboard-icon-hospital">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <h3>{{ $total_poli }}</h3>
                        <p>Total Poli</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="{{ route('admin.obat.index') }}" class="dashboard-link">
                    <div class="dashboard-card text-center">
                        <div class="dashboard-icon-wrapper dashboard-icon-obat">
                            <i class="fas fa-pills"></i>
                        </div>
                        <h3>{{ $total_obat }}</h3>
                        <p>Total Obat</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection