<!DOCTYPE html>
<html lang="id">
<head>
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
      <a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a>
    </nav>
    <footer>&copy; 2025 Poliklinik - Dinus Sehat</footer>
  </aside>

  <main>
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
</html>

{{-- <!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Poliklinik - Sistem Kesehatan Profesional</title>
  <style>
    :root {
      --primary-color: #003049;
      --secondary-color: #669bbc;
      --background: #f8f9fa;
      --text-dark: #1c1c1c;
      --white: #fff;
      --shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: var(--background);
      color: var(--text-dark);
      line-height: 1.6;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
    }

    /* Header */
    header {
      background: var(--white);
      padding: 1rem 0;
      box-shadow: var(--shadow);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header nav {
      display: flex;
      gap: 1.5rem;
      align-items: center;
    }

    header nav a.btn {
      text-decoration: none !important;
      font-weight: 600;
      border-radius: 0.5rem;
    }

    .btn {
      padding: 0.6rem 1.2rem;
      border: none;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .btn-primary {
      background-color: var(--primary-color);
      color: var(--white);
    }

    .btn-outline {
      border: 2px solid var(--primary-color);
      background: transparent;
      color: var(--primary-color);
    }

    .btn:hover {
      background-color: var(--secondary-color);
      color: var(--white);
      transform: translateY(-2px);
    }

    /* Hero */
    .hero {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 2rem;
    padding: 4rem 0;
    background: var(--white);
    }

    .hero > div {
    flex: 1 1 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-width: 300px;
    }

    .hero img {
    width: 100%;
    height: auto;
    max-width: 500px;
    margin: 0 auto;
    border-radius: 1rem;
    box-shadow: var(--shadow);
    display: block;
    }

    .hero h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: var(--primary-color);
    }

    .hero p {
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
    max-width: 600px;
    }

    .hero a {
    display: inline-block;
    margin-top: 0.5rem;
    }

    /* Features */
    .features {
      background: #e3e8ef;
      padding: 4rem 1rem;
    }

    .features h2 {
      text-align: center;
      margin-bottom: 2rem;
      color: var(--primary-color);
      font-size: 2rem;
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 1.5rem;
    }

    .feature-card {
      background: white;
      padding: 1.5rem;
      border-radius: 0.75rem;
      box-shadow: var(--shadow);
      transition: transform 0.3s ease;
    }

    .feature-card:hover {
      transform: translateY(-5px);
    }

    .feature-card h4 {
      margin-bottom: 0.5rem;
      color: var(--primary-color);
    }

    /* Testimonials */
    .testimonials {
      padding: 4rem 1rem;
      background: var(--white);
    }

    .testimonials h2 {
      text-align: center;
      margin-bottom: 2rem;
      color: var(--primary-color);
      font-size: 2rem;
    }

    .testimonial-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.5rem;
    }

    .testimonial-card {
      background: #f1f3f5;
      padding: 1.25rem;
      border-radius: 0.75rem;
      box-shadow: var(--shadow);
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.6s ease-out;
    }

    .testimonial-card.active {
      opacity: 1;
      transform: translateY(0);
    }

    .testimonial-card strong {
      display: block;
      margin-top: 0.5rem;
      color: var(--primary-color);
    }

    /* Footer */
    footer {
      background: #1d3557;
      color: var(--white);
      text-align: center;
      padding: 2rem 1rem;
    }

    @media (max-width: 768px) {
      .hero {
        flex-direction: column;
        text-align: center;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="container">
      <h1>Poliklinik</h1>
      <nav>
        <a href="#home">Beranda</a>
        <a href="#features">Fitur</a>
        <a href="#testimonials">Testimoni</a>
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero scroll-animate" id="home">
    <div class="container">
      <div>
        <h2>Layanan Kesehatan Profesional & Cepat</h2>
        <p>Poliklinik menghadirkan solusi medis terpercaya dengan sistem digital modern, menjangkau pasien di mana saja, kapan saja.</p>
        <div>
          <a href="{{ route('register') }}" class="btn btn-outline">Register</a>
        </div>
      </div>
    </div>
  </section>  
  

  <!-- Features -->
  <section class="features scroll-animate" id="features">
    <div class="container">
      <h2>Fitur Unggulan</h2>
      <div class="features-grid">
        <div class="feature-card"><h4>Respons Cepat ⚡</h4><p>Tim kami selalu siap merespon kebutuhan Anda dengan cepat dan akurat.</p></div>
        <div class="feature-card"><h4>Akses 24/7 💬</h4><p>Konsultasi dan penanganan tersedia kapan saja, 24 jam penuh.</p></div>
        <div class="feature-card"><h4>Data Aman 🔒</h4><p>Sistem kami menjamin kerahasiaan dan keamanan seluruh informasi pasien.</p></div>
        <div class="feature-card"><h4>Integrasi Sistem 🔄</h4><p>Mendukung integrasi dengan rekam medis digital dan layanan farmasi.</p></div>
        <div class="feature-card"><h4>Tenaga Medis Profesional 🩺</h4><p>Ditangani oleh dokter dan tenaga medis bersertifikat dan berpengalaman.</p></div>
        <div class="feature-card"><h4>Reservasi Online 📅</h4><p>Pendaftaran kunjungan jadi mudah, cepat, dan tanpa antrean.</p></div>
        <div class="feature-card"><h4>Pelacakan Obat 💊</h4><p>Pasien dapat memantau status resep dan obat secara real-time.</p></div>
        <div class="feature-card"><h4>Riwayat Medis Digital 📂</h4><p>Lihat dan kelola seluruh riwayat kesehatan Anda dengan mudah.</p></div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials" id="testimonials">
    <div class="container">
      <h2>Apa Kata Pasien Kami?</h2>
      <div class="testimonial-grid">
        <div class="testimonial-card scroll-animate"><p>"Dokternya sabar, sistemnya rapi banget. Saya senang jadi pasien di sini."</p><strong>– Nadia</strong></div>
        <div class="testimonial-card scroll-animate"><p>"Proses daftar dan konsultasi sangat cepat dan efisien. Top!"</p><strong>– Rian</strong></div>
        <div class="testimonial-card scroll-animate"><p>"Semua bisa online, dari booking sampai lihat hasil lab. Praktis sekali."</p><strong>– Melisa</strong></div>
        <div class="testimonial-card scroll-animate"><p>"Tenaga medisnya profesional, sangat informatif dan ramah."</p><strong>– Farhan</strong></div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Poliklinik. Seluruh hak cipta dilindungi.</p>
  </footer>

  <!-- Scroll Animation JS -->
  <script>
    function animateScroll() {
      document.querySelectorAll('.scroll-animate').forEach(el => {
        const rect = el.getBoundingClientRect();
        const trigger = window.innerHeight * 0.85;
        if (rect.top < trigger) {
          el.classList.add('active');
        }
      });
    }

    window.addEventListener('scroll', animateScroll);
    window.addEventListener('load', animateScroll);
  </script>

</body>
</html> --}}