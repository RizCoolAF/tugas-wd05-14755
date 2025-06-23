@extends('layout.main')

@section('title', 'Dashboard Pasien')

@section('isi')
<style>
    /* Gaya dasar untuk keterbacaan yang lebih baik */
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
        border-radius: 12px;
        padding: 20px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 2px solid #e0e0e0;
    }

    .dashboard-card:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .dashboard-icon-wrapper {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        color: #fff;
    }

    .dashboard-icon-daftar {
        background: #2E7D32; /* Hijau yang lebih gelap untuk kontras */
    }

    .card-welcome {
        background: linear-gradient(135deg, #2E7D32, #4CAF50);
        border-radius: 12px;
        padding: 25px;
        color: white;
        margin-bottom: 30px;
    }

    .card-welcome h4 {
        font-weight: bold;
        font-size: 28px;
        margin-bottom: 15px;
    }

    .card-welcome div {
        font-size: 20px;
    }

    .card-data-diri {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        padding: 25px;
        margin-bottom: 30px;
        border: 1px solid #e0e0e0;
    }

    .card-data-diri h5 {
        color: #2E7D32;
        font-weight: bold;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .data-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .data-item {
        background-color: #f5f5f5;
        border-radius: 10px;
        padding: 20px;
        border: 1px solid #e0e0e0;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .data-item i {
        color: #2E7D32;
        font-size: 28px;
        min-width: 40px;
    }

    .data-text {
        line-height: 1.4;
    }

    .data-label {
        font-weight: bold;
        font-size: 18px;
        color: #424242;
        margin-bottom: 5px;
    }

    .data-value {
        font-size: 20px;
        color: #212121;
    }

    /* Tombol yang lebih besar dan jelas */
    .action-button {
        display: block;
        padding: 15px;
        font-size: 22px;
        font-weight: bold;
        text-align: center;
        background-color: #2E7D32;
        color: white;
        border-radius: 10px;
        margin-top: 20px;
    }

    .action-button:hover {
        background-color: #1B5E20;
        color: white;
        text-decoration: none;
    }
</style>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            {{-- Welcome --}}
            <div class="row">
                <div class="col-12">
                    <div class="card-welcome">
                        <div class="row align-items-center">
                            <div class="col-md-2 text-center">
                                <div style="width: 100px; height: 100px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-user-circle fa-3x" style="color: #2E7D32;"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h4 class="mb-3">Selamat Datang, {{ Auth::user()->name }}!</h4>
                                <div style="font-size: 20px;">
                                    Anda berada di dashboard pasien. Nomor Rekam Medis Anda: 
                                    <strong style="font-size: 22px;">{{ Auth::user()->pasien->no_rm }}</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Data Diri --}}
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="card-data-diri">
                        <h5><i class="fas fa-id-card-alt me-2"></i> Data Diri Pasien</h5>
                        <div class="data-grid">
                            <div class="data-item">
                                <i class="fas fa-user"></i>
                                <div class="data-text">
                                    <div class="data-label">Nama Lengkap</div>
                                    <div class="data-value">{{ Auth::user()->pasien->nama }}</div>
                                </div>
                            </div>
                            
                            <div class="data-item">
                                <i class="fas fa-hashtag"></i>
                                <div class="data-text">
                                    <div class="data-label">Nomor Rekam Medis</div>
                                    <div class="data-value">{{ Auth::user()->pasien->no_rm }}</div>
                                </div>
                            </div>
                            
                            <div class="data-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="data-text">
                                    <div class="data-label">Alamat</div>
                                    <div class="data-value">{{ Auth::user()->pasien->alamat }}</div>
                                </div>
                            </div>
                            
                            <div class="data-item">
                                <i class="fas fa-phone-alt"></i>
                                <div class="data-text">
                                    <div class="data-label">Nomor Telepon</div>
                                    <div class="data-value">{{ Auth::user()->pasien->no_hp }}</div>
                                </div>
                            </div>
                            
                            <div class="data-item">
                                <i class="fas fa-id-card"></i>
                                <div class="data-text">
                                    <div class="data-label">Nomor KTP</div>
                                    <div class="data-value">{{ Auth::user()->pasien->no_ktp }}</div>
                                </div>
                            </div>
                            
                            <div class="data-item">
                                <i class="fas fa-envelope"></i>
                                <div class="data-text">
                                    <div class="data-label">Alamat Email</div>
                                    <div class="data-value">{{ Auth::user()->email }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tombol Aksi Utama --}}
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ route('pasien.periksa') }}" class="action-button">
                        <i class="fa-solid fa-house-medical-circle-check"></i> Daftar Berobat
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection