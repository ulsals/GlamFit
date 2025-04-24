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
                <a href="#makeUp">Make Up</a>
                <a href="#kebaya">Kebaya</a>
                <a href="#jas">Jas</a>
                <a href="#ContactUs">Contact Us</a>
            </div>

            <div class="navbar-extra">
                <a href="# " id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
     <section class="hero" id="home">
      <div class="content">
        <h1>Tampil Sempurna di Setiap Momen Bersama GlamFit</h1>
        <p>Kami menyediakan kebaya hingga jas  dan layanan make-up terbaik, 
          kami siap membantu Anda tampil memukau di hari penting Anda. 
          Elegan, praktis, dan terjangkau. </p>
          <a href="#" class="cta">Explore Now</a>
        </div>
        <div class="image_hero">
          <img src="Asset/hero_img.png" alt="GambarHero">
        </div>
     </section>

    <!-- Hero Section End -->

    <!-- About Us Start -->
     <section class="about" id="About">
        <div class="image_about">
          <img src="Asset/about.png" alt="GambarAbout">
        </div>
        <div class="content_about">
          <h1>About Us</h1>
          <p>GlamFit adalah platform penyewaan kebaya, jas, dan layanan make-up yang dirancang untuk membantu Anda tampil sempurna di setiap momen spesial. Kami memahami betapa pentingnya setiap detail dalam acara istimewa Anda, 
            mulai dari penampilan yang anggun hingga layanan yang mudah dan praktis. </p>
          <a href="#" class="ctb">Check our product</a>
      </div>
     </section>

    <!-- About Us End -->

    {{-- Make up  --}}

    <div class="makeup-section">
      <h1 >Make Up</h1>
      <div class="makeup-grid">
          @foreach ($makeups as $makeup)
          <div class="makeup-card">
              <img src="{{ asset($makeup->image) }}" class="makeup-img" alt="{{ $makeup->name }}">
              <div class="makeup-info">
                  <h2 class="makeup-name">{{ $makeup->name }}</h2>
                  <div class="makeup-bottom">
                      <p class="makeup-price">Rp{{ number_format($makeup->price, 0, ',', '.') }}</p>
                      <a href="#" class="order-btn">Order Now</a>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
  
    {{-- make up end --}}


     <!-- feather icon -->
     <script>
        feather.replace();
      </script>
    <script src="script.js"></script>   


    <!-- Javascript -->
    <script src="js/script.js"></script>
</body>
</html>