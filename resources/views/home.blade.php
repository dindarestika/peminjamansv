@extends('layouts.frontend')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">

<div class="container">
  <div class="row">
  <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <div>
            <h1>Selamat Datang di Sistem Peminjaman Ruang dan Alat</h1>
            <h2>Sekolah Vokasi Universitas Sebelas Maret</h2>
            <a href="{{'/login'}}" class="btn-get-started scrollto">Get Started</a>
        </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="{{asset('frontend/assets/img/hero-img.png') }}" class="img-fluid" alt="">
        </div>
    </div>
  </div>
</div>

</section><!-- End Hero -->

<main id="main">

<!-- ======= Tatacara Section ======= -->
<section id="tatacara" class="tatacara">
  <div class="container">

    <div class="row">
      <div class="col-lg-6" data-aos="zoom-in">
        <img src="{{asset('frontend/assets/img/about.jpg')}}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
    <div class="content pt-4 pt-lg-0">
        <h3>Tentang Sistem</h3>
        <p class="font-italic">
        Sistem informasi ini dibuat untuk mahasiswa, staff, dan dosen Sekolah Vokasi Universitas Sebelas Maret Surakarta. 
        Sistem dapat melayani peminjaman ruang atau alat untuk keperluan perkuliahan, organisasi, sertifikasi dan lainnya.
        Tata cara meggunakan sistem yang perlu diperhatikan:
        </p>
        <ul>
        <li><i class="icofont-check-circled"></i> Sign In</li>
            <li><i class="icofont-check-circled"></i> Baca Peraturan</li>
            <li><i class="icofont-check-circled"></i> Mengisi Form Peminjaman</li>
            <li><i class="icofont-check-circled"></i> Tunggu Status Peminjaman</li>
        </ul>
        </div>
    </div>
    </div>

  </div>
</section><!-- End Tatacara Section -->

    <!-- ======= Fasilitas Section ======= -->
<section id="fasilitas" class="fasilitas">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Fasilitas</h2>
      <p>Fasilitas yang ada pada sistem informasi ini adalah peminjaman ruang dan alat.</p>
    </div>
  </div>
</section><!-- End Fasilitas Section -->

<!-- ======= Cta Section ======= -->
<section id="peminjamanalat" class="cta">
  <div class="container">

    <div class="row" data-aos="zoom-in">
      <div class="col-lg-9 text-center text-lg-left">
        <h3>Peminjaman Alat</h3>
        <p> Setelah membaca tata cara dan peraturan. Silahkan klik button Pinjam Alat!.</p>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="{{'/formpeminjamanalat'}}">Pinjam Alat!</a>
      </div>
    </div>

  </div>
</section><!-- End Cta Section -->

<!-- ======= Cta Section ======= -->
<section id="peminjamanruang" class="cta">
  <div class="container">

    <div class="row" data-aos="zoom-in">
      <div class="col-lg-9 text-center text-lg-left">
        <h3>Peminjaman Ruang</h3>
        <p>Setelah membaca tata cara dan peraturan. Silahkan klik button Pinjam Ruang!.</p>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="{{'/formpeminjamanruang'}}">Pinjam Ruang!</a>
      </div>
    </div>

  </div>
</section><!-- End Cta Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Peraturan</h2>
    </div>

    <ul class="faq-list">

      <li data-aos="fade-up">
        <a data-toggle="collapse" class="" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="icofont-simple-up"></i></a>
        <div id="faq1" class="collapse show" data-parent=".faq-list">
          <p>
            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
          </p>
        </div>
      </li>

      <li data-aos="fade-up" data-aos-delay="100">
        <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="icofont-simple-up"></i></a>
        <div id="faq2" class="collapse" data-parent=".faq-list">
          <p>
            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
          </p>
        </div>
      </li>

      <li data-aos="fade-up" data-aos-delay="200">
        <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="icofont-simple-up"></i></a>
        <div id="faq3" class="collapse" data-parent=".faq-list">
          <p>
            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
          </p>
        </div>
      </li>

      <li data-aos="fade-up" data-aos-delay="300">
        <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="icofont-simple-up"></i></a>
        <div id="faq4" class="collapse" data-parent=".faq-list">
          <p>
            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
          </p>
        </div>
      </li>

      <li data-aos="fade-up" data-aos-delay="400">
        <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="icofont-simple-up"></i></a>
        <div id="faq5" class="collapse" data-parent=".faq-list">
          <p>
            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
          </p>
        </div>
      </li>

      <li data-aos="fade-up" data-aos-delay="500">
        <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
        <div id="faq6" class="collapse" data-parent=".faq-list">
          <p>
            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
          </p>
        </div>
      </li>

    </ul>

  </div>
</section><!-- End Frequently Asked Questions Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
<div class="container">
    <div class="section-title" data-aos="fade-up">
    <h2>Contact Us</h2>
    </div>

    <div class="row">

    <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
        <div class="info">
        <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Location:</h4>
            <p>Jalan Kolonel Sutarto Nomor 150K, Jebres, Surakarta City, Central Java 57126</p>
        </div>

        <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email:</h4>
            <p>vokasi@unit.uns.ac.id</p>
        </div>

        <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Call:</h4>
            <p>(0271) 662622</p>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>

    </div>

    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="name">Your Name</label>
            <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
            </div>
            <div class="form-group col-md-6">
            <label for="name">Your Email</label>
            <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
        </div>
        <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
            <div class="validate"></div>
        </div>
        <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
    </div>

    </div>

</div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
@stop