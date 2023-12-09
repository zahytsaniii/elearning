<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
include 'spinner.php';
include 'navbar.php';
?>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
  <div class="owl-carousel header-carousel position-relative">
    <div class="owl-carousel-item position-relative">
      <img class="img-fluid" src="img/carousel-1.jpg" alt="" />
      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
        style="background: rgba(24, 29, 56, 0.7)">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-sm-10 col-lg-8">
              <h5 class="text-primary text-uppercase mb-3 animated slideInDown">
                Portal
              </h5>
              <h1 class="display-3 text-white animated slideInDown">
                Pendaftaran Mahasiswa
              </h1>
              <p class="fs-5 text-white mb-4 pb-2">
                Selamat datang di portal pendaftaran mahasiswa baru.
                Silahkan memilih menu di bawah ini
              </p>
              <a href="loginn.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Masuk</a>
              <a href="register.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Daftar Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Carousel End -->

<!-- Service Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
            <h5 class="mb-3">Beasiswa</h5>
            <p>
              Informasi beasiswa untuk mahasiswa yang berprestasi dan/atau tidak mampu
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
            <h5 class="mb-3">Informasi & Jadwal</h5>
            <p>
              Informasi jalur masuk berupa persyaratan dan jadwal kegiatan untuk masing-masing jalur
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-home text-primary mb-4"></i>
            <h5 class="mb-3">Profil Program Studi</h5>
            <p>
              Profil program studi, jenjang, akreditasi, biaya pendidikan, dan daya tampung
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
            <h5 class="mb-3">Berita</h5>
            <p>
              Informasi terkini tentang proses penerimaan mahasiswa baru di UNS
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service End -->

<!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px">
        <div class="position-relative h-100">
          <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover" />
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
        <h6 class="section-title bg-white text-start text-primary pe-3">
          Tentang UNS
        </h6>
        <h1 class="mb-4">Selamat Datang di Universitas Sebelas Maret</h1>
        <p class="mb-4">
          Sebelas Maret jam 10.00 pagi, dengan dibacanya Keputusan Presiden Republik Indonesia tentang pembukaan
          “Universitas Negeri Surakarta Sebelas Maret”,
          maka Universitas Sebelas Maret (UNS) resmi berdiri sebagai Perguruan Tinggi Negeri di Solo. Pemandangan yang
          meriah meramaikan peresmian universitas negeri
          yang telah ditunggu kelahirannya sejak lama itu. Cikal bakal UNS sendiri dapat dirunut jejaknya dari
          1950-an.
        </p>
        <a class="btn btn-primary py-3 px-5 mt-2" href="sejarah.php">Read More</a>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- Categories Start -->
<div class="container-xxl py-5 category">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">
        Categories
      </h6>
      <h1 class="mb-5">Prodi</h1>
    </div>
    <div class="row g-3">
      <div class="col-lg-7 col-md-6">
        <div class="row g-3">
          <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
            <a class="position-relative d-block overflow-hidden" href="">
              <img class="img-fluid" src="img/cat-1.jpg" alt="" />
              <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                <h5 class="m-0">Web Design</h5>
                <small class="text-primary">49 Courses</small>
              </div>
            </a>
          </div>
          <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
            <a class="position-relative d-block overflow-hidden" href="">
              <img class="img-fluid" src="img/cat-2.jpg" alt="" />
              <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                <h5 class="m-0">Graphic Design</h5>
                <small class="text-primary">49 Courses</small>
              </div>
            </a>
          </div>
          <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
            <a class="position-relative d-block overflow-hidden" href="">
              <img class="img-fluid" src="img/cat-3.jpg" alt="" />
              <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
                <h5 class="m-0">Video Editing</h5>
                <small class="text-primary">49 Courses</small>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px">
        <a class="position-relative d-block h-100 overflow-hidden" href="">
          <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover" />
          <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
            <h5 class="m-0">Online Marketing</h5>
            <small class="text-primary">49 Courses</small>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Categories Start -->

<!-- Team Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">
        Instructors
      </h6>
      <h1 class="mb-5">Dosen</h1>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item bg-light">
          <div class="overflow-hidden">
            <img class="img-fluid" src="img/team-1.jpg" alt="" />
          </div>
          <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
            <div class="bg-light d-flex justify-content-center pt-2 px-1">
              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="text-center p-4">
            <h5 class="mb-0">Sahirul Alim Bawono</h5>
            <small>Programmer</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item bg-light">
          <div class="overflow-hidden">
            <img class="img-fluid" src="img/team-2.jpg" alt="" />
          </div>
          <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
            <div class="bg-light d-flex justify-content-center pt-2 px-1">
              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="text-center p-4">
            <h5 class="mb-0">Sari</h5>
            <small>Design UI/UX</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item bg-light">
          <div class="overflow-hidden">
            <img class="img-fluid" src="img/team-3.jpg" alt="" />
          </div>
          <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
            <div class="bg-light d-flex justify-content-center pt-2 px-1">
              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="text-center p-4">
            <h5 class="mb-0">Fiddin Yusfida A'la</h5>
            <small>Web Developer</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item bg-light">
          <div class="overflow-hidden">
            <img class="img-fluid" src="img/team-4.jpg" alt="" />
          </div>
          <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
            <div class="bg-light d-flex justify-content-center pt-2 px-1">
              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="text-center p-4">
            <h5 class="mb-0">Hartatik</h5>
            <small>Math-Pow</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
    <div class="text-center">
      <h6 class="section-title bg-white text-center text-primary px-3">
        Testimonial
      </h6>
      <h1 class="mb-5">Mahasiswa Berkata!</h1>
    </div>
    <div class="owl-carousel testimonial-carousel position-relative">
      <div class="testimonial-item text-center">
        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
          style="width: 80px; height: 80px" />
        <h5 class="mb-0">Noorindria</h5>
        <p>D3TI</p>
        <div class="testimonial-text bg-light text-center p-4">
          <p class="mb-0">
            Di hari yang cerah ini aku mencium bokong pickup
          </p>
        </div>
      </div>
      <div class="testimonial-item text-center">
        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
          style="width: 80px; height: 80px" />
        <h5 class="mb-0">Zidan Fathul</h5>
        <p>D3TI</p>
        <div class="testimonial-text bg-light text-center p-4">
          <p class="mb-0">
            Di hari yang cerah ini aku melihat temanku mencium bokong pickup
          </p>
        </div>
      </div>
      <div class="testimonial-item text-center">
        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
          style="width: 80px; height: 80px" />
        <h5 class="mb-0">Wasis Wicaksono</h5>
        <p>D3TI</p>
        <div class="testimonial-text bg-light text-center p-4">
          <p class="mb-0">
            Look at the star, look how they shine for you!
          </p>
        </div>
      </div>
      <div class="testimonial-item text-center">
        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
          style="width: 80px; height: 80px" />
        <h5 class="mb-0">Syafa Milati Azka</h5>
        <p>D3TI</p>
        <div class="testimonial-text bg-light text-center p-4">
          <p class="mb-0">
            Awali harimu dengan menangisT_T
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonial End -->

<?php
include 'footer.php';
?>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>