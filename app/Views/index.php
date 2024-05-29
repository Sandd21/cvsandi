<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sandia Anggara</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="logo">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/sandiaanggara.jpeg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Sandia Anggara</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://x.com/sandd_21?t=Xk32XYVeib1ixWr8bvAX8Q&s=09sss" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/share/ZjR412HnKimYvyaw/?mibextid=qi2Omg" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/sandyaanggara/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Sandia Anggara</h1>
      <p>I'm  a <span class="typed" data-typed-items="Student, Freelancer, Singer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <?php foreach ($abouts as $about): ?>
      <div class="container">

        <div class="section-title">
          <h2>Tentang</h2>
          <p>Saya adalah seseorang yang mudah bersosialisasi dan menikmati berinteraksi dengan orang lain. Saya memiliki kemampuan untuk mendengarkan dengan empati, berbicara dengan jelas, dan memahami bahasa tubuh serta isyarat non-verbal. Dengan sifat ramah dan terbuka, saya mampu membangun hubungan yang baik dengan berbagai macam orang, baik dalam lingkungan pribadi maupun profesional.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/sandia1.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Mahasiswa Tenik Informatika,Univeristas Muhammadiyah Sukabumi.</h3>
            <p class="fst-italic">
            Sebagai mahasiswa Teknik Informatika, saya adalah individu yang bersemangat dan berdedikasi untuk memahami serta menerapkan prinsip-prinsip ilmu komputer dan teknologi. Saya memiliki ketertarikan yang mendalam terhadap pengembangan perangkat lunak, jaringan komputer, dan keamanan siber. Saya juga terampil dalam berbagai bahasa pemrograman seperti Python, Java, dan C++, yang memungkinkan saya untuk mengembangkan solusi kreatif dan efisien untuk berbagai masalah teknis.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Nama:</strong> <span><?= $about['name']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tangal Lahir:</strong> <span><?= $about['birthday']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span><?= $about['age']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Telepon:</strong> <span><?= $about['phone']; ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span><?= $about['city']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?= $about['email']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Jenis Kelamin:</strong> <span><?= $about['gender']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Agama:</strong> <span><?= $about['religion']; ?></span></li>
                </ul>
              </div>
            </div>
            <p>
            Dengan latar belakang pendidikan yang solid dan semangat untuk terus belajar, saya siap untuk menghadapi tantangan di dunia teknologi dan berkontribusi secara positif di bidang Teknik Informatika. Saya yakin bahwa kombinasi pengetahuan teknis dan kemampuan interpersonal saya akan membantu saya mencapai kesuksesan dalam karier saya di masa depan.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <?php endforeach ?>
    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Fakta</h2>
          <p>Saya memiliki pengetahuan mendalam dalam bidang Teknik Informatika, khususnya dalam pengembangan perangkat lunak dan analisis data</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Kepuasan Pelanggan</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Jam Kerja</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Kapasitas Kerja</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Keahlian</h2>
          <p>Kemampuan saya untuk memahami dan menerapkan konsep baru memungkinkan saya untuk terus berkembang dalam lingkungan yang dinamis.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Ringkasan</h3>
            <div class="resume-item pb-0">
              <h4>Sandia Anggara</h4>
              <p><em>Sebagai mahasiswa Teknik Informatika, saya memiliki minat yang mendalam terhadap dunia teknologi dan komputasi</em></p>
              <ul>
                <li>Sukabumi,Jawa Barat,Indonesia</li>
                <li>0857-2116-1764</li>
                <li>sandiaanggara4@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Pendidikan</h3>
            <div class="resume-item">
              <h4>Teknik Infomatika </h4>
              <h5>2021 - Sekarang</h5>
              <p><em>Universitas Muhammadiyah Sukabumi, Jawa Barat</em></p>
              
            </div>
            <div class="resume-item">
              <h4>Ilmu Pengetahuan Sosial</h4>
              <h5>2019 - 2021</h5>
              <p><em>MA Muhammadiyah Kadudampit, Jawa Barat</em></p>
              
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title"> Pengalaman</h3>
            <div class="resume-item">
              <h4>Pimpinan Daerah Ikatan Pelajar Muhammadiyah</h4>
              <h5>2020 - Sekarang</h5>
              <p><em>Sukabumi,Jawa Barat </em></p>
              <ul>
                <li>Melakukan penelitian dasar dan terapan untuk mengembangkan pengetahuan baru.</li>
                <li>Mengembangkan teknologi, metode, atau produk baru melalui eksperimen dan studi.</li>
                <li>Mengembangkan materi edukatif seperti buku teks, artikel populer, dan sumber daya digital.</li>
                <li>Membentuk jaringan dan kemitraan dengan institusi penelitian, universitas, dan industri.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Tim Marketing PT Dika</h4>
              <h5>2020 - 2021</h5>
              <p><em>Sukabumi, Jawa Barat</em></p>
              <ul>
                <li>Merancang dan mengimplementasikan strategi pemasaran yang efektif untuk produk dan layanan bank.</li>
                <li>Membuat dan menjalankan kampanye promosi untuk produk seperti tabungan, deposito, pinjaman, kartu kredit, dan layanan perbankan digital.</li>
                <li>Melakukan riset pasar untuk memahami kebutuhan dan preferensi pelanggan.</li>
                <li>Menyusun dan mengelola database pelanggan untuk mengoptimalkan komunikasi dan layanan.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portofolio</h2>
          <p>Sebagai seorang profesional di bidang teknologi, saya memiliki kemampuan untuk mengembangkan program berupa web dan aplikasi yang memenuhi standar industri dan tersertifikasi. Dengan keahlian dalam berbagai bahasa pemrograman dan teknologi terkini, saya dapat menciptakan solusi digital yang inovatif dan efisien. </p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
            
              <li data-filter=".filter-card">Sertifikasi</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/satu.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/dua.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/tiga.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/empat.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          
          </div>

          

          

          

          
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

   

    

            

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Kritik dan saran Anda sangat berharga bagi saya, karena membantu saya tumbuh dan meningkatkan diri. saya menghargai setiap masukan yang konstruktif untuk membuat layanan saya lebih baik</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Kadudampit,Sukabumi,Jawa Barat</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>sandiaanggara4@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>0857-21161764</p>
              </div>

              <iframe src="https://www.google.com/maps/place/Kec.+Kadudampit,+Kabupaten+Sukabumi,+Jawa+Barat/@-6.8274861,106.8495636,12z/data=!3m1!4b1!4m6!3m5!1s0x2e684a8a4580cf85:0xde7e23fb1e0ef580!8m2!3d-6.8733716!4d106.9091996!16s%2Fg%2F11b_2mqjtz?entry=ttu" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama Anda</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email Anda</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Pesan</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan Anda telah terkirim, Terima Kasih</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>sandiaanggara</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
       
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>