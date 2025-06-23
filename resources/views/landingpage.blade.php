<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Poliklinik - Sumber Sehat</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poliklinik Sumber Sehat</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    :root {
      --primary-color: rgb(19, 76, 19);
      --secondary-color: #193d54;
      --background: #F1FAEE;
      --text-color: #1C1C1C;
    }
    * { 
      margin: 0; padding: 0; box-sizing: border-box; 
    }
    body, html { 
      height: 100%;
      scroll-behavior: smooth;
      font-family: 'Segoe UI', sans-serif; 
    }
    body {
      display: flex;
      background: url('/dist/img/hospit.jpg') no-repeat center center fixed;
      background-size: cover;
    }
    aside {
      width: 250px;
      background-color: var(--primary-color);
      color: white;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: fixed;
    }
    .brand {
      text-align: center;
      padding: 2rem 1rem;
      font-size: 1.5rem;
      font-weight: bold;
    }
    .brand i {
      font-size: 2rem;
      margin-bottom: 0.5rem;
      display: block;
    }
    nav {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      padding: 2rem 1rem;
    }
    nav a {
      color: white;
      text-decoration: none;
      font-size: 1.1rem;
      padding: 0.75rem 1rem;
      border-radius: 8px;
      transition: 0.3s;
    }
    nav a:hover {
      background-color: var(--secondary-color);
    }
    main {
      height: 1500px;
      margin-left: 250px;
      padding: 3rem 2rem;
      flex: 1;
      color: var(--text-color);
      background: rgba(255, 255, 255, 0.85);
      overflow-y: auto;
    }
    .hero {
      text-align: center;
      margin-bottom: 3rem;
    }
    .hero h1 {
      font-size: 2.5rem;
      color: var(--primary-color);
    }
    .hero p {
      font-size: 1.2rem;
      margin-top: 1rem;
    }
    .btn {
      display: inline-block;
      margin-top: 1.5rem;
      padding: 0.75rem 1.5rem;
      background: var(--secondary-color);
      color: white;
      border-radius: 8px;
      text-decoration: none;
      transition: 0.3s;
    }
    .btn:hover {
      background: #6094c7;
    }
    .section {
      border-top: 1px solid rgba(0, 0, 0, 0.1);
      padding: 6rem 2rem;
      margin-bottom: 4rem;
    }
    .section h2 {
      font-size: 2rem;
      color: var(--primary-color);
      margin-bottom: 1rem;
    }
    .features-container {
        display: flex;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
        margin-top: 2rem;
    }
    .feature-item {
        background-color: #e6f2ea;
        padding: 1rem 1.5rem;
        border-radius: 12px;
        color: #0a2e12;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        min-width: 180px;
        text-align: center;
        font-weight: 500;
    }
    footer {
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
      background-color: var(--primary-color);
      color: white;
    }
    @media(max-width: 768px){
      aside {
        width: 100px;
      }
      .brand span { display: none; }
      main {
        margin-left: 100px;
      }
      nav a {
        font-size: 0.8rem;
      }
    }
  </style>
</head>
<body>

  <aside>
    <div class="brand">
      <i class="fa-solid fa-house-chimney-medical"></i>
      <span>Poliklinik</span>
      <span>Pro</span>
    </div>
    <nav>
      <a href="#home"><i class="fas fa-home"></i> Beranda</a>
      <a href="#features"><i class="fas fa-star"></i> Fitur</a>
      <a href="#testi"><i class="fas fa-comments"></i> Testimoni</a>
      <a href="{{ route('login') }}"><i class="fa-regular fa-address-card"></i> Login</a>
      {{-- <a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a> --}}
    </nav>
    <footer>&copy; 2025 Poliklinik - Dinus Sehat</footer>
  </aside>

  <main>
    <section class="hero" id="home">
      <h1>Sistem Temu Janji <br> Pasien - Dokter</h1>
      <p style="margin-top: 0.5rem;">Bengkelkoding 2025</p>
    </section>
  
    <section class="section" id="features">
      <div class="features-container" style="gap: 3rem;">
        <!-- Registrasi Pasien -->
        <div class="feature-item" style="max-width: 400px; text-align: left;">
          <div style="display: flex; align-items: center; gap: 1.2rem;">
            <i class="fa-solid fa-user fa-2xl" style="color: var(--secondary-color);"></i>
            <div>
              <h3 style="margin: 0; font-size: 1.3rem;">Register as Pasien</h3>
              <p style="font-size: 0.95rem; margin: 0.4rem 0;">
                Apabila Anda adalah seorang Pasien, silahkan Registrasi terlebih dahulu untuk melakukan pendaftaran sebagai Pasien!
              </p>
              <a href="{{ route('register') }}" style="color: #007bff; text-decoration: none;">Klik Link Berikut →</a>
            </div>
          </div>
        </div>
  
        <!-- Login Dokter -->
        <div class="feature-item" style="max-width: 400px; text-align: left;">
          <div style="display: flex; align-items: center; gap: 1.2rem;">
            <i class="fa-solid fa-user-doctor fa-2xl" style="color: var(--secondary-color);"></i>
            <div>
              <h3 style="margin: 0; font-size: 1.3rem;">Login as Dokter</h3>
              <p style="font-size: 0.95rem; margin: 0.4rem 0;">
                Apabila Anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk memulai melayani Pasien!
              </p>
              <a href="{{ route('login') }}" style="color: #007bff; text-decoration: none;">Klik Link Berikut →</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section class="section" id="testi">
      <h2 style="text-align: center;">Testimoni Pasien</h2>
      <p style="text-align: center; font-size: 1.1rem; margin-top: 0.5rem;">Para Pasien yang Setia</p>
      <div class="features-container" style="flex-direction: column; align-items: center; gap: 1.5rem;">
        <div class="feature-item" style="max-width: 700px;">
          <p>
            <i class="fa-solid fa-comment-dots"></i> Pelayanan di web ini sangat cepat dan mudah. Detail histori tercatat lengkap, termasuk catatan obat. Harga pelayanan terjangkau, Dokter ramah, pokoke mantab pol!
            <br><em>- Dembele, Rennes</em>
          </p>
        </div>
        <div class="feature-item" style="max-width: 700px;">
          <p>
            <i class="fa-solid fa-comment-dots"></i> Aku tidak pernah merasakan mudahnya berobat sebelum Aku mengenal web ini. Web yang mudah digunakan dan dokter yang terampil membuat berobat menjadi lebih menyenangkan!
            <br><em>- Ita, Semarang</em>
          </p>
        </div>
      </div>
    </section>
  </main>
  
  {{-- <main>
    <section class="hero" id="home">
      <h1>Selamat Datang di Poliklinik Profesional DINUS</h1>
      <p>Layanan kesehatan terpercaya dan profesional, hadir untuk Anda.</p>
      <a href="{{ route('register') }}" class="btn">Register Now</a>
    </section>

    <section class="section" id="features">
      <h2 style="text-align: center;">Fitur Utama</h2>
      <div class="features-container">
        <div class="feature-item"><i class="fa-solid fa-globe"></i> Reservasi Online</div>
        <div class="feature-item"><i class="fa-solid fa-notes-medical"></i> Riwayat Medis Digital</div>
        <div class="feature-item"><i class="fa-solid fa-people-arrows"></i> Konsultasi Cepat</div>
        <div class="feature-item"><i class="fa-solid fa-user-secret"></i> Keamanan Data Pasien</div>
      </div>
    </section>

    <section class="section" id="testi">
      <h2 style="text-align: center;">Kutipan dari pasien kami.</h2>
      <div class="features-container">
      <div class="feature-item">
      <p>"Pelayanan super cepat dan tanggap, sangat puas!" - Dembele
        <br>
         "Mudah dan dokter profesional." - Vania
      </p>
      </div>
      </div>
    </section>

  </main>

</body>
</html> --}}