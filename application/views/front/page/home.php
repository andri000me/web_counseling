 <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(<?php echo base_url()?>assets/front/img/slide/slide-1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 style="margin-bottom: 0"><span>E</span>-COUNSELING </h2>
                <h2 >STMIK <span>BANDUNG</span></h2>
                <p class="animated fadeInUp">Layanan E-Counseling STMIK BANDUNG yang memudahkan kamu untuk berkonsultasi kepada dosen dan dapat diakses dimanapun kamu berada.</p>
                <a href="<?php echo base_url('auth')?>" class="btn-get-started animated fadeInUp">Mulai Konseling</a>
              </div>
            </div>
          </div>

        </div>


      </div>
    </div>
  </section><!-- End Hero -->

    <main id="main">


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="<?php echo base_url()?>assets/front/img/home/2.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Apa itu E-Counseling?.</h3>
            <p >
             E-Counseling merupakan sebuah proses bantuan yang dilakukan seorang konselor kepada mahasiswa untuk membantu menyelesaikan masalah yang dialami. Dengan menggunakan media internet sehingga konseling dapat di akses dimana saja.
            </p>
            <p>
              STIMIK BANDUNG Melayani berbagai macam masalah konsultasi diantaranya :
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Masalah Akademik</li>
              <li><i class="icofont-check-circled"></i> Masalah Personal</li>
              <li><i class="icofont-check-circled"></i> Dan masih banyak lagi</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Kami Melayani</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-2" >
            <div class="icon-box" style="width: 100%">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Permasalahan Akademik</a></h4>
              Mencakup persmasalahan perkuliahan,nilai,dan lainnya
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-2" >
            <div class="icon-box" style="width: 100%">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">KRS/PRS</a></h4>
               <p>Kartu Rencanaan Studi/Pra Rencana Studi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-2" >
            <div class="icon-box" style="width: 100%">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">SKRIPSI/Kerja Praktek</a></h4>
               <p>Bimbingan Skripsi/Kerja Praktek</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-2" >
            <div class="icon-box" style="width: 100%">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Permasalahan Personal</a></h4>
               <p>Konselor mendengarkan keluhan atas masalah pribadi mu</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-2" >
            <div class="icon-box" style="width: 100%">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Permasalahan Keuangan</a></h4>
               <p>Masalah tantang pembayaran</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" >
            <div class="icon-box" style="width: 100%">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Masih Banyak Lagi</a></h4>
               <p>Masih banyak lagi fitur yang disediakan E-Counseling STMIK BANDUNG untuk mu</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Artikel</h2>
        </div>


        <div class="row portfolio-container">
          <?php foreach ($article as $a) { 
            $str = $a->date;
            $date = date('d M g:i A ', strtotime($str));
            $thumbs = $a->thumbs ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url().'assets/article/thumbs/'.$thumbs ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $a->title ?></h4>
                <p><?php echo $date ?></p>
                <div class="portfolio-links">
                  <a href="<?php echo base_url().'assets/article/'.$a->thumbs ?>" data-gall="portfolioGallery" class="venobox" title="Lihat Gambar"><i class="bx bx-search"></i></a>
                  <a href="<?php echo base_url('front/article/detail_article/').$a->id_article ?>" title="Lihat Berita"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

        </div>

        <hr>
        <div class="d-flex justify-content-center">
          <a href="<?php echo base_url('front/article')?>" class="btn btn-rounded btn-info  ">Semua Artikel</a>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

      </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->
