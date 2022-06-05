<?php 
extract($_POST);
if(isset($submit)){
    $dewasa;
    $anak;
    $asal_stasiun;
    $stasiun_tujuan;
    $tanggal_keberangkatan;
    $no_kereta;
    $nama_kereta;
    $jam_keberangkatan;
    $jam_kedatangan;
    $tanggal_kedatangan;
}
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
<head>
    <title> Kereta Apiku </title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css1/bootstrap.css">
    <link rel="stylesheet" href="css1/style.css">
    <link rel="stylesheet" href="css1/fonts.css">
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
            $( "#datepicker2" ).datepicker();
        } );
    </script>
</head>
  <body>
  <section class="section">
        <div class="swiper-form-wrap">
          <!-- Swiper-->
          <div class="swiper-container swiper-slider swiper-slider_height-2 swiper-align-left swiper-align-left-custom context-dark bg-grey-darker" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
          <div class="swiper-wrapper">
          <div class="swiper-slide" data-slide-bg="img/3.jpg">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                      <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                        <h3 style="color:#191970;">Selamat datang di KeretaApi-ku</h3>
                        <div class="divider divider-decorate"></div>
                        <p class="text-spacing-sm" style="color:#191970;">Melayani dengan sepenuh hati kemanapun tujuan anda. Ayo naik kereta!</p><a class="button button-default-outline button-nina button-sm" href="#" style="color:#191970;">Lihat selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container container-bigger form-request-wrap form-request-wrap-modern">
            <div class="row row-fix justify-content-sm-center justify-content-lg-end">
              <div class="col-lg-6 col-xxl-5">
                <div class="form-request form-request-modern bg-gray-lighter novi-background">
                  <center><h4>CARI JADWAL KERETA </h4><center>
                  <!-- RD Mailform-->
                  <form class="rd-mailform form-fix" action = "jadwalkereta.php?email=<?= $email ?>" method="POST">
                    <div class="row row-20 row-fix">
                      <div class="col-sm-12">
                        <label class="form-label-outside">Stasiun Asal</label>
                        <div class="form-wrap form-wrap-inline">
                          <select class="form-input select-filter" data-placeholder="Pilih Stasiun" name="asal_stasiun">
                            <option value="Stasiun Yogjakarta (YK)">Stasiun Yogjakarta (YK)</option>
                            <option value="Stasiun Gambir (GM)">Stasiun Gambir (GM)</option>
                            <option value="Stasiun Gubeng (SGU)">Stasiun Gubeng (SGU)</option>
                            <option value="Stasiun Solo Balapan (SLO)">Stasiun Solo Balapan (SLO)</option>
                            <option value="Stasiun Tawang (SMT)">Stasiun Tawang (SMT) </option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <label class="form-label-outside">Stasiun Tujuan</label>
                        <div class="form-wrap form-wrap-inline">
                          <select class="form-input select-filter" data-placeholder="Pilih Stasiun" name="stasiun_tujuan">
                          <option value="Stasiun Yogjakarta (YK)">Stasiun Yogjakarta (YK)</option>
                            <option value="Stasiun Gambir (GM)">Stasiun Gambir (GM)</option>
                            <option value="Stasiun Gubeng (SGU)">Stasiun Gubeng (SGU)</option>
                            <option value="Stasiun Solo Balapan (SLO)">Stasiun Solo Balapan (SLO)</option>
                            <option value="Stasiun Tawang (SMT)">Stasiun Tawang (SMT) </option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <label class="form-label-outside">Tanggal keberangkatan</label>
                        <div class="form-wrap form-wrap-validation">
                          <!-- Select -->
                          <input class="form-input" id="datepicker" name="tanggal_keberangkatan" type="text" data-time-picker="date" placeholder="Pilih Tanggal">
                          <!--select.form-input.select-filter(data-placeholder="All", data-minimum-results-for-search="Infinity",  name='city')-->
                          <!--  option(value="1") Choose the date-->
                          <!--  option(value="2") Primary-->
                          <!--  option(value="3") Middle-->
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label-outside">Dewasa</label>
                        <div class="form-wrap form-wrap-modern">
                          <input class="form-input input-append" id="form-element-stepper" type="number" min="1" max="300" value="0" name="dewasa">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label-outside">Anak</label>
                        <div class="form-wrap form-wrap-modern">
                          <input class="form-input input-append" id="form-element-stepper-1" type="number" min="0" max="300" value="0" name="anak">
                        </div>
                      </div>
                    </div>
                    <div class="form-wrap form-button">
                     <button class="button button-block button-secondary" type="submit" value="submit" name="submit">Cari kereta</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-variant-1 bg-default novi-background bg-cover"> 
        <div class="container container-wide">
          <div class="row row-fix justify-content-xl-end row-30 text-center text-xl-left">
            <div class="col-xl-8">
              <div class="parallax-text-wrap">
                <h3>Kemana kah tujuan anda?</h3><span class="parallax-text">Kereta Api-Ku</span>
              </div>
              <hr class="divider divider-decorate">
            </div>
            <div class="col-xl-3 text-xl-right"><a class="button button-secondary button-nina" href="#">Lihat beberapa tujuan</a></div>
          </div>
          <div class="row row-50">
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <figure class="event-default-image"><img src="img/baliii.jpg" alt="" width="570" height="370"/>
                  </figure>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="#">Bali</a></h5><span class="heading-5"></span>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <figure class="event-default-image"><img src="img/bandung.jpg" alt="" width="570" height="370"/>
                  </figure>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="#">Bandung</a></h5><span class="heading-5"></span>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <figure class="event-default-image"><img src="img/jakarta.jpg" alt="" width="570" height="370"/>
                  </figure>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="#">Jakarta</a></h5><span class="heading-5"></span>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <figure class="event-default-image"><img src="img/sura.jpg" alt="" width="570" height="370"/>
                  </figure>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="#">Surabaya</a></h5><span class="heading-5"></span>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <figure class="event-default-image"><img src="img/solo.jpg" alt="" width="570" height="370"/>
                  </figure>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="#">Surakarta</a></h5><span class="heading-5"></span>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <figure class="event-default-image"><img src="img/jogja.jpg" alt="" width="570" height="370"/>
                  </figure>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="#">Jogjakarta</a></h5><span class="heading-5"></span>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- our advantages-->
      <section class="section section-lg bg-gray-lighter novi-background bg-cover text-center">
        <div class="container container-wide">
          <h3>Pelayanan KeretaApi-ku</h3>
          <h5>Our Services</h5>
          <div class="divider divider-decorate"></div>
          <div class="row row-50 justify-content-sm-center text-left">
            <div class="col-sm-10 col-md-5 col-xl-4">
              <article class="box-minimal box-minimal-border">
              <center> <div class="box-minimal-icon novi-icon mdi mdi-train"></div> <center>
               <p class="big box-minimal-title">Menyediakan tiket kereta</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">Menyediakan berbagai tiket kereta kemanapun tujuan anda dengan berbagai kemudahan transaksi</div></br></br>
                <div class="form-wrap form-button">
                </div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-4">
              <article class="box-minimal box-minimal-border">
              <center><div class="box-minimal-icon novi-icon mdi mdi-ticket"></div><center>
                <p class="big box-minimal-title">Pembatalan tiket kereta</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">Menyediakan sistem pembatalan tiket anda, ikuti langkah-langkah di website kami</div></br></br></br>
                <div class="form-wrap form-button">
                </div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-4">
              <article class="box-minimal box-minimal-border">
                <center><div class="box-minimal-icon novi-icon mdi mdi-car"></div><center>
                <p class="big box-minimal-title">Banyak Akomodasi terdekat</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">Menyediakan berbagai pelayanan Akomodasi dekat dengan stasiun seperti pelayanan taksi, Go-jek, Go-car, Grab, dan layanan lainnya yang mudah anda akses</div>
                <div class="form-wrap form-button">
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
  </body>
</html>