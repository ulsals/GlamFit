<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href="Asset/Logo_Head.png">
    <title>GlamFit</title>
    <link rel="stylesheet" href="css/Style.css">
     <!-- feather icon -->
     <script src="https://unpkg.com/feather-icons"></script> 
     {{-- library aos --}}
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     {{-- SweetAlert2 --}}
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar">
            <div class="logo">
              <img src="Asset/GlamFit.png" > 
                <!-- menu -->
            </div>
            <div class="menu">
                <a href="#home">Home</a>
                <a href="#makeup">Make Up</a>
                <a href="#kebaya">Kebaya</a>
                <a href="#jas">Jas</a>
                <a href="#contact">Contact Us</a>
            </div>

            <div class="navbar-extra">
                <a href="# " id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
    </nav>
    <!-- Navbar End -->

    <!-- Weather Bar Start -->
<div id="weather-bar" class="weather-bar">
  <div class="loading-text">Memuat informasi cuaca...</div>
</div>

<div class="calendar-container">
  <div class="calendar-controls">
    <button onclick="changeMonth(-1)" class="nav-button">
      <i class="fas fa-chevron-left"></i>
    </button>

    <div class="month-year-display" onclick="toggleMonthYear()">
      <span id="monthYearSidebar" class="month-year-text"></span>
    </div>

    <button onclick="changeMonth(1)" class="nav-button">
      <i class="fas fa-chevron-right"></i>
    </button>
  </div>
</div>


    <!-- Hero Section Start -->
     <section class="hero" id="home">
      <div class="content">
        <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200" >Tampil Sempurna di Setiap Momen Bersama GlamFit</h1>
        <p data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">Kami menyediakan kebaya hingga jas  dan layanan make-up terbaik, 
          kami siap membantu Anda tampil memukau di hari penting Anda. 
          Elegan, praktis, dan terjangkau. </p>
          <a href="#makeup" class="cta" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">Explore Now</a>
        </div>
        <div class="image_hero" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
          <img src="Asset/hero_img.png" alt="GambarHero"  >
        </div>
     </section>

    <!-- Hero Section End -->

    <!-- About Us Start -->
     <section class="about" id="About">
        <div class="image_about" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
          <img src="Asset/about.png" alt="GambarAbout">
        </div>
        <div class="content_about">
          <h1 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">About Us</h1>
          <p data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">GlamFit adalah platform penyewaan kebaya, jas, dan layanan make-up yang dirancang untuk membantu Anda tampil sempurna di setiap momen spesial. Kami memahami betapa pentingnya setiap detail dalam acara istimewa Anda, 
            mulai dari penampilan yang anggun hingga layanan yang mudah dan praktis. </p>
          <a href="#makeup" class="ctb" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">Check our product</a>
      </div>
     </section>

    <!-- About Us End -->

    {{-- Make up  --}}
    <section class="makeup" id="makeup">
    <div class="makeup-section">
      <div class="section-title">
      <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">Make Up</h1>
      <div class="line-decor" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
        <span class="line"></span>
        <span class="diamond"></span>
      </div>
      </div>

      <div class="grid" >
          @foreach ($makeups as $makeup)
          <div class="card" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-delay="200">
              <img src="{{ asset($makeup->image) }}" class="card-img" alt="{{ $makeup->name }}">
              <div class="info">
                  <h2 class="card-name">{{ $makeup->name }}</h2>
                  <div class="card-bottom">
                      <p class="card-price">Rp{{ number_format($makeup->price, 0, ',', '.') }}</p>
                      <a href="javascript:void(0)" class="order-btn" 
                        onclick="openModal({{ $makeup->id }}, '{{ $makeup->name }}', '{{ asset($makeup->image) }}')">
                        Order Now
                      </a>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
  </section>
    {{-- make up end --}}
    
    {{-- Kebaya Start --}}
    <section class="kebaya" id="kebaya">
      <div class="kebaya-section">
        <div class="section-title">
        <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200" >Kebaya</h1>
        <div class="line-decor" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
          <span class="line"></span>
          <span class="diamond"></span>
        </div>
        </div>

        <div class="grid">
          @foreach ($kebayas as $kebaya)
            <div class="card" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-delay="200">
              <img src="{{ asset($kebaya->image) }}" class="card-img" alt="{{ $kebaya->name }}">
              <div class="info">
                <h2>{{ $kebaya->name }}</h2>
                <p>{{ $kebaya->description }}</p>
                <div class="card-bottom">
                  <p class="card-price">Rp{{ number_format($kebaya->price, 0, ',', '.') }}</p>
                  <a href="javascript:void(0)" class="order-btn" 
                  onclick="openModal({{ $kebaya->id }}, '{{ $kebaya->name }}', '{{ asset($kebaya->image) }}')">Check It</a>
              </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      </section>
      

      {{-- Jas Start  --}}
      <section class="jas" id="jas">
        <div class="jas-section">
          <div class="section-title">
          <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">Jas</h1>
          <div class="line-decor" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
            <span class="line"></span>
            <span class="diamond"></span>
          </div>
          </div>
  
          <div class="grid">
            @foreach ($jas as $jas)
              <div class="card" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset($jas->image) }}" class="card-img" alt="{{ $jas->name }}">
                <div class="info">
                  <h2>{{ $jas->name }}</h2>
                  <p>{{ $jas->description }}</p>
                  <div class="card-bottom">
                    <p class="card-price">Rp{{ number_format($jas->price, 0, ',', '.') }}</p>
                    <a href="javascript:void(0)" class="order-btn" 
                  onclick="openModal({{ $jas->id }}, '{{ $jas->name }}', '{{ asset($jas->image) }}')">Check It</a>
                </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        </section>
      {{-- Jas End --}}

   {{-- pop up start --}}
   <div id="orderModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div style="display: flex; gap: 30px;">
            <img id="modalImage" src="" width="200">
            <form id="form-pesan" method="POST" action="{{ route('layanan.pesan') }}">
                @csrf
                <h2 id="modalTitle"></h2>
                <p>Data Pembeli</p>
                <input type="hidden" name="layanan_id" id="layananId">
                <p>Nama</p>
                <input type="text" name="nama" placeholder="Nama" required>
                <p>Nomor WhatsApp</p>
                <input type="text" name="whatsapp" placeholder="Nomor WhatsApp" required>
                <p>Tanggal Sewa</p>
                <input type="date" name="tanggal_sewa" required>
                <button id="pesanButton" type="submit" class="order-btn">PESAN</button>
            </form>
        </div>
    </div>
</div>
  {{-- pop up end --}}

      {{-- Footer start --}}
      <footer data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
         <div class="footer-top" id="contact">
            <img src="Asset/GlamFit.png" alt="Logo" class="logo-footer">
        <div class="footer-content">
            <div class="footer-section">
                <h1>GlamFit</h1>
            </div>
    
            <div class="footer-section">
                <h3>NAVIGATION</h3>
                <ul>
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#makeup">MAKE UP</a></li>
                    <li><a href="#kebaya">KEBAYA</a></li>
                    <li><a href="#jas">JAS</a></li>
                    <li><a href="#contact">CONTACT US</a></li>
                </ul>
            </div>
    
            <div class="footer-section">
                <h3>CONTACT US</h3>
                <ul>
                    <li>📧 glamfit@gmail.com</li>
                    <li>📍 Jl. Merak Alam, Jakarta Pusat, Indonesia</li>
                    <li>📞 +62 8532 1234 560</li>
                </ul>
            </div>
        </div>
    
        <div class="footer-bottom">
            <p>© 2025 GlamFit</p>
        </div>
    </footer>
      {{-- Footer end --}}

     <!-- feather icon -->
     <script>
        feather.replace();
      </script>
    {{-- <script src="script.js"></script>    --}}

    {{-- library aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- Javascript -->
    <script src="js/script.js"></script>
</body>
</html>