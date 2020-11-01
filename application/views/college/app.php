
    <?php

    //Proteksi Halaman
    if( $this->session->userdata('username') == '' && 
        $this->session->userdata('role') == '' || 
        $this->session->userdata('role') != 'MHS') {
        redirect(base_url('auth'));
    } ?>


    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <?php
        include(APPPATH.'views/layout/head.php');

    ?>
    <body>
    <?php
    include(APPPATH.'views/layout/horizontal-jquery.php'); 
    ?>
  
  <!-- Preloader - style you can find in spinners.css -->
   
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
   
    <!-- Main wrapper - style you can find in pages.scss -->
   
    <div id="main-wrapper">
        

    <?php
        include(APPPATH.'views/layout/top-header-college.php');
        include(APPPATH.'views/layout/sidebar-college.php');
        include(APPPATH.'views/layout/content.php');
        include(APPPATH.'views/layout/footer.php');
    ?>

     </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    
    

    </body>
    </html>
