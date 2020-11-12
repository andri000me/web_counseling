 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
           <li><a href="<?php echo base_url('front/home')?>">Beranda</a></li>
          <li><a href="<?php echo base_url('front/article')?>">Artikel</a></li>
          <li><?php echo $breadcumbs ?></li>
        </ol>
        <h2><?php echo $breadcumbs ?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="d-flex justify-content-center">

          <div class="col-lg-9 entries">
            <?php foreach ($article as $a ) { 
            $str = $a->date;
            $date = date('d M g:i A ', strtotime($str));
            ?>
            <article class="entry entry-single">

              <div class="entry-img">
                 <img src="<?php echo base_url('assets/article/').$a->thumbs ?>" alt="" class="img-fluid" width="100%">
              </div>

              <h2 class="entry-title">
                <a href="#"><?php echo $a->title ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#"><?php echo $a->name ?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><?php echo $date ?></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?php echo $a->content ?> 
                 </p>

              </div>

              

            </article><!-- End blog entry -->

        <?php } ?>

          </div><!-- End blog entries list -->


        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->