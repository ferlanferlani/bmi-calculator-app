<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>BMI Calculator | Hasil Perhitungan</title>
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

   <section id="hero" class="d-flex align-items-center">
                <?php
                if (isset ($_GET['submit'])) {
            
                  $tinggi_badan = $_GET['tinggibadan'];
                  $berat_badan = $_GET['beratbadan'];
                }
                $tb = $tinggi_badan / 100;
                $hasil = $berat_badan / ($tb * $tb);
                $rata = number_format($hasil, 1);


                if ($rata <= 18.5) {
                    echo '<div
                      class="container position-relative"
                      data-aos="fade-up"
                      data-aos-delay="100"
                    >
                    <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-md-8">
                    <div class="card mb-3" style="opacity: 0.8;">
                      <div class="card-header fw-bold">
                          HASIL PERHITUNGAN
                      </div>
                    <div class="row g-0">
                      <div class="col-md-4">
                      <img src="assets/img/kekurangan berat badan.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                      <div class="card-body">
                      <h6 class="card-title">Level status BMI Anda adalah <b class="text-info">KEKURANGAN BERAT BADAN</b></h6>
                        <p class="card-text">Berat badan bisa dikatakan ideal jika angka BMI berada antara angka 18,5 sampai 22,9. Bagaimana cara menjaga agar berat badan tetap ideal? perlunya mengonsumsi makanan dan minuman sesuai dengan kebutuhan kalori harian, untuk mempertahankan berat badan ideal seperti sekarang. Misalnya, jika kebutuhan kalori harian adalah 1950 kkal, maka Anda harus mengonsumsi makanan dengan total kalori 1950 per harinya.</p>
                      </div>
                      <div class="row">
                      <div class="col-sm-5 ms-3">
                      <label for="basic-url" class="form-label fw-bold">TINGGI BADAN</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="'.$tinggi_badan.'" disabled>
                          <span class="input-group-text" id="basic-addon2">cm</span>
                        </div>
                      </div>
                      <div class="col-sm-5 ms-3">
                      <label for="basic-url" class="form-label fw-bold">BERAT BADAN</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="'.$berat_badan.'" disabled>
                          <span class="input-group-text" id="basic-addon2">kg</span>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-sm-5 ms-3">
                      <label for="basic-url" class="form-label fw-bold">STATUS BMI</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="Kurang Berat Badan" disabled>
                        </div>
                      </div>
                      <div class="col-sm-5 ms-3">
                      <label for="basic-url" class="form-label fw-bold">BMI</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="'.$rata.'" disabled>
                        </div>
                      </div>
                      </div>
                      <div class="link">
                        <a href="."><div class="btn btn-primary shadow btn-sm ms-3">Hitung Ulang</div></a>
                        <a href="."><div class="btn btn-secondary shadow btn-sm ms-3">Kembali</div></a>
                      </div>
                     </div>
                    </div>
                   </div>
                      </div>
                    </div>
                   </div>
                   </div>'
                    ;


                    

                } elseif ($rata <= 25) {
                    echo '
                    <div
                      class="container position-relative"
                      data-aos="fade-up"
                      data-aos-delay="100"
                    >
                    <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-md-8">
                    <div class="card mb-3" style="opacity: 0.8;">
                      <div class="card-header fw-bold">
                          HASIL PERHITUNGAN
                      </div>
                    <div class="row g-0">
                      <div class="col-md-4">
                      <img src="assets/img/normal.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                      <div class="card-body">
                      <h6 class="card-title">Level status BMI Anda adalah <b class="text-success">NORMAL</b></h6>
                        <p class="card-text">Berat badan bisa dikatakan ideal jika angka BMI berada antara angka 18,5 sampai 22,9. Bagaimana cara menjaga agar berat badan tetap ideal? perlunya mengonsumsi makanan dan minuman sesuai dengan kebutuhan kalori harian, untuk mempertahankan berat badan ideal seperti sekarang. Misalnya, jika kebutuhan kalori harian adalah 1950 kkal, maka Anda harus mengonsumsi makanan dengan total kalori 1950 per harinya.</p>
                      </div>
                      <div class="row">
                      <div class="col-sm-5 ms-3">
                      <label for="basic-url" class="form-label fw-bold">TINGGI BADAN</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="'.$tinggi_badan.'" disabled>
                          <span class="input-group-text" id="basic-addon2">cm</span>
                        </div>
                      </div>
                      <div class="col-sm-5 ms-3">
                      <label for="basic-url" class="form-label fw-bold">BERAT BADAN</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="'.$berat_badan.'" disabled>
                          <span class="input-group-text" id="basic-addon2">kg</span>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-sm-5 ms-3">
                      <label for="basic-url" class="form-label fw-bold">STATUS BMI</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="Normal" disabled>
                        </div>
                      </div>
                      <div class="col-sm-5 ms-3">
                      <label for="basic-url" class="form-label fw-bold">BMI</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="'.$rata.'" disabled>
                        </div>
                      </div>
                      </div>
                      <div class="link">
                        <a href="."><div class="btn btn-primary shadow btn-sm ms-3">Hitung Ulang</div></a>
                        <a href="."><div class="btn btn-secondary shadow btn-sm ms-3">Kembali</div></a>
                      </div>
                     </div>
                    </div>
                   </div>
                      </div>
                    </div>
                   </div>
                   </div>
                    ';


                } elseif ($rata <= 28) {
                    echo '
                    <div
                      class="container position-relative"
                      data-aos="fade-up"
                      data-aos-delay="100"
                    >
                    <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-md-8">
                    <div class="card mb-3" style="opacity: 0.8;">
                      <div class="card-header fw-bold">
                          HASIL PERHITUNGAN
                      </div>
                    <div class="row g-0">
                      <div class="col-md-4">
                      <img src="assets/img/kelebihan bobot.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                      <div class="card-body">
                      <h6 class="card-title">Level status BMI Anda adalah <b class="text-warning">KELEBIHAN BOBOT</b></h6>
                        <p class="card-text">Berat badan bisa dikatakan ideal jika angka BMI berada antara angka 18,5 sampai 22,9. Bagaimana cara menjaga agar berat badan tetap ideal? perlunya mengonsumsi makanan dan minuman sesuai dengan kebutuhan kalori harian, untuk mempertahankan berat badan ideal seperti sekarang. Misalnya, jika kebutuhan kalori harian adalah 1950 kkal, maka Anda harus mengonsumsi makanan dengan total kalori 1950 per harinya.</p>
                      </div>
                      <div class="row">
                      <div class="col-sm-5 ms-3">
                      <label for="basic-url" class="form-label fw-bold">TINGGI BADAN</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="'.$tinggi_badan.'" disabled>
                          <span class="input-group-text" id="basic-addon2">cm</span>
                        </div>
                      </div>
                      <div class="col-sm-5 ms-3">
                      <label for="basic-url" class="form-label fw-bold">BERAT BADAN</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="'.$berat_badan.'" disabled>
                          <span class="input-group-text" id="basic-addon2">kg</span>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-sm-5 ms-3">
                      <label for="basic-url" class="form-label fw-bold">STATUS BMI</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="Kelebihan Bobot" disabled>
                        </div>
                      </div>
                      <div class="col-sm-5 ms-3">
                      <label for="basic-url" class="form-label fw-bold">BMI</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="'.$rata.'" disabled>
                        </div>
                      </div>
                      </div>
                      <div class="link">
                        <a href="."><div class="btn btn-primary shadow btn-sm ms-3">Hitung Ulang</div></a>
                        <a href="."><div class="btn btn-secondary shadow btn-sm ms-3">Kembali</div></a>
                      </div>
                     </div>
                    </div>
                   </div>
                      </div>
                    </div>
                   </div>
                   </div>
                    ';


                } elseif ($rata > 27) { 
                  echo'
                  <div
                    class="container position-relative"
                    data-aos="fade-up"
                    data-aos-delay="100"
                  >
                  <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-md-8">
                  <div class="card mb-3" style="opacity: 0.8;">
                    <div class="card-header fw-bold">
                        HASIL PERHITUNGAN
                    </div>
                  <div class="row g-0">
                    <div class="col-md-4">
                    <img src="assets/img/obesitas.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                    <h6 class="card-title">Level status BMI Anda adalah <b class="text-danger">OBESITAS</b></h6>
                      <p class="card-text">Berat badan bisa dikatakan ideal jika angka BMI berada antara angka 18,5 sampai 22,9. Bagaimana cara menjaga agar berat badan tetap ideal? perlunya mengonsumsi makanan dan minuman sesuai dengan kebutuhan kalori harian, untuk mempertahankan berat badan ideal seperti sekarang. Misalnya, jika kebutuhan kalori harian adalah 1950 kkal, maka Anda harus mengonsumsi makanan dengan total kalori 1950 per harinya.</p>
                    </div>
                    <div class="row">
                    <div class="col-sm-5 ms-3">
                    <label for="basic-url" class="form-label fw-bold">TINGGI BADAN</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="'.$tinggi_badan.'" disabled>
                        <span class="input-group-text" id="basic-addon2">cm</span>
                      </div>
                    </div>
                    <div class="col-sm-5 ms-3">
                    <label for="basic-url" class="form-label fw-bold">BERAT BADAN</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="'.$berat_badan.'" disabled>
                        <span class="input-group-text" id="basic-addon2">kg</span>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-5 ms-3">
                    <label for="basic-url" class="form-label fw-bold">STATUS BMI</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="Obesitas" disabled>
                      </div>
                    </div>
                    <div class="col-sm-5 ms-3">
                    <label for="basic-url" class="form-label fw-bold">BMI</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="'.$rata.'" disabled>
                      </div>
                    </div>
                    </div>
                    <div class="link">
                      <a href="."><div class="btn btn-primary shadow btn-sm ms-3">Hitung Ulang</div></a>
                      <a href="."><div class="btn btn-secondary shadow btn-sm ms-3">Kembali</div></a>
                    </div>
                   </div>
                  </div>
                 </div>
                    </div>
                  </div>
                 </div>
                 </div>
                  '; 
                } 
            
            ?>
    </section>



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
