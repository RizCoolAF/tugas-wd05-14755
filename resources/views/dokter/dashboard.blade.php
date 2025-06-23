@extends('layout.main')

@section('title', 'Dashboard Dokter')

@section('isi')
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
        box-shadow: 0 10px 25px rgba(46, 125, 50, 0.3);
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

    .dashboard-icon-jadwal {
        background: linear-gradient(135deg, #4CAF50, #81C784);
    }

    .dashboard-icon-periksa {
        background: linear-gradient(135deg, #2196F3, #64B5F6);
    }

    .dashboard-icon-riwayat {
        background: linear-gradient(135deg, #FF9800, #FFB74D);
    }

    .card-welcome {
        background: linear-gradient(135deg, #2E7D32, #4CAF50);
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
    }

    .card-welcome p {
        margin: 0;
        font-size: 18px;
        color: #e8f5e9;
    }

    .card-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #2E7D32;
    }

    .card-description {
        font-size: 18px;
        color: #616161;
    }

    /* Animasi sederhana */
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .dashboard-icon-wrapper:hover {
        animation: bounce 0.5s;
    }
</style>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">

            {{-- Welcome Card --}}
            <div class="row">
                <div class="col-12">
                    <div class="card-welcome d-flex align-items-center">
                        <div class="me-4 flex-shrink-0" style="margin-right: 2rem;">
                            <div style="width: 100px; height: 100px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 3px solid #A5D6A7;">
                                <i class="fas fa-user-md fa-3x" style="color: #2E7D32;"></i>
                            </div>
                        </div>
                        <div>
                            <h4>Selamat Datang, Dr. {{ Auth::user()->name }}!</h4>
                            <p>Anda login sebagai dokter. Silakan pilih menu di bawah untuk memulai.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Quick Access Menu --}}
            <div class="row g-4">
                <div class="col-md-4">
                    <a href="{{ route('dokter.jadwal-periksa.index') }}" class="dashboard-link">
                        <div class="dashboard-card text-center">
                            <div class="dashboard-icon-wrapper dashboard-icon-jadwal">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h5 class="card-title">Jadwal Praktik</h5>
                            <p class="card-description">Atur jadwal praktik Anda</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('dokter.memeriksa') }}" class="dashboard-link">
                        <div class="dashboard-card text-center">
                            <div class="dashboard-icon-wrapper dashboard-icon-periksa">
                                <i class="fas fa-stethoscope"></i>
                            </div>
                            <h5 class="card-title">Periksa Pasien</h5>
                            <p class="card-description">Periksa pasien hari ini</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('dokter.riwayat-pasien') }}" class="dashboard-link">
                        <div class="dashboard-card text-center">
                            <div class="dashboard-icon-wrapper dashboard-icon-riwayat">
                                <i class="fas fa-history"></i>
                            </div>
                            <h5 class="card-title">Riwayat Pasien</h5>
                            <p class="card-description">Lihat rekam medis pasien</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection