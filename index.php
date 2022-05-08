<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>BMI Calculator</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets2/css/bootstrap.css" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>
  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href=".">BMI Calculator</a></h1>

        <nav id="navbar" class="navbar">
          <ul>
            </li>
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div
        class="container position-relative"
        data-aos="fade-up"
        data-aos-delay="100"
      >
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Ayo Mulai Hitung Berat Badan Ideal Anda Sekarang</h1>
            <h2>Metode ini digunakan untuk menentukan berat badan yang sehat berdasarkan berat dan tinggi badan</h2>
          </div>
        </div>
        <div class="text-center">
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>

        <div class="row icon-boxes">
          <div
            class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="200"
          >
            <div class="icon-box ">
              <h4 class="title text-info">Kurang Bobot</h4>
              <p class="description">
                Angka BMI normal berada pada kisaran 18,5-25. Jika angka BMI melebihi 25, kamu memiliki berat badan berlebih. Sedangkan, jika angka BMI berada di bawah 18 berarti berat badanmu kurang.
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="300"
          >
            <div class="icon-box">
              <h4 class="title text-success">Normal</h4>
              <p class="description">
                Angka BMI normal berada pada kisaran 18,5-25. Jika angka BMI melebihi 25, kamu memiliki berat badan berlebih. Sedangkan, jika angka BMI berada di bawah 18 berarti berat badanmu kurang
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="400"
          >
            <div class="icon-box">
              <h4 class="title text-warning">Kelebihan Bobot</h4>
              <p class="description">
                Saat BMI seseorang menyentuh angka 23–24,9, maka ia dikategorikan mengalami kelebihan berat badan. BMI normal berada di kisaran angka 18,5–22,9.
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            data-aos="zoom-in"
            data-aos-delay="500"
          >
            <div class="icon-box">
              <h4 class="title text-danger">Obesitas</h4>
              <p class="description">
                Seseorang mengalami obesitas jika BMI-nya sama atau di atas 30. Saat BMI seseorang mencapai angka 25–29,9, maka ia dikategorikan mengalami kelebihan berat badan.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>bmi Calculator</h2>
            <h6>
              Gunakan kalkulator ini untuk memeriksa Indeks Massa Tubuh (BMI) Anda dan periksa
              apakah Anda memiliki berat badan yang ideal atau tidak, Dan jawab beberapa pertanyaan di bawah berikut.
            </h6>
          </div>
          <form action="process.php" method="get">
            <div class="row justify-content-center">
              <div class="col-md-4">
                <div class="input-group mb-3">
                  <input
                    type="number"
                    class="form-control"
                    placeholder="Berapa Tinggi Badan Anda?" name="tinggibadan" required
                  />
                  <span class="input-group-text" id="basic-addon2">cm</span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="input-group mb-3">
                  <input
                    type="number"
                    class="form-control" name="beratbadan"
                    placeholder="Berapa Berat Badan Anda?" required
                  />
                  <span class="input-group-text" id="basic-addon2">kg</span>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row justify-content-center">
              <button
                  type="submit" name="submit"
                  class="calc shadow col-6 col-sm-2"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                >
                  Hitung
                </button>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- End About Section -->
    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>BMI Calculator</span></strong
            >. All Rights Reserved
          </div>
          <div class="credits">
            Created by <a href="http://ferlanferlani.rf.gd" target="_blank" >Ferlan Ferlani</a>
          </div>
        </div>
        <div class="text-center text-md-right pt-3 pt-md-0">
          <a href="https://web.facebook.com/ferlan.ferlani.id" target="_blank" class="facebook"
            ><img
              src="assets/media-social/icons8-facebook.svg"
              width="30"
              alt="facebook"
          /></a>
          <a href="https://www.instagram.com/ferlanferlani/" target="_blank" class="instagram"
            ><img
              src="assets/media-social/icons8-instagram.svg"
              width="30"
              alt="instagram"
          /></a>
          <a href="https://github.com/uniquecoded" target="_blank" class="github"
            ><img
              src="assets/media-social/icons8-github.svg"
              width="30"
              alt="github"
          /></a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
