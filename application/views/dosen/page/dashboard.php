<?php foreach ($user as $user) { ?>
 <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper ">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- Temp - Earnings -->
            <!-- ============================================================== -->
            <div class="card gredient-info-bg mt-0 mb-0">
                <div class="card-body">
                    <h4 class="card-title text-white text-uppercase">Selamat datang <?php echo $user->name ?></h4>
                    <h5 class="card-subtitle text-white op-5">Dashboard</h5>
                    <div class="row mt-4 mb-3">
                        <!-- col -->
                        <div class="col-sm-12 col-lg-4">
                            <div class="temp d-flex align-items-center flex-row">
                                <div class="display-5 text-white"><i class="wi wi-time-5"></i></div>
                                <div class="ml-3">
                                    <h3 class="mb-0 text-white"> <?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    echo date('d F Y '); ?></h3><small class="text-white op-5">Indonesia</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
          
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-7 col-xl-6">
                         <div class="card card-hover">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Chart Konseling</h4>
                                        <h5 class="card-subtitle">Ratio Pemilihan Tipe Konseling</h5>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="row mt-5">
                                    <!-- column -->
                                    <div class="col-lg-6">
                                        <div id="visitor" style="height:290px; width:100%;" class="mt-3"></div>
                                    </div>
                                    <!-- column -->
                                    <div class="col-lg-6">
                                        <h5>Data Chart</h5>
                                        <?php 
                                        $perkuliahan = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL001' ")->num_rows() ;
                                        $KRS = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL002' ")->num_rows() ;
                                        $PRS = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL003' ")->num_rows() ;
                                        $nilai = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL004' ")->num_rows() ;
                                        $SKRIPSI = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL005' ")->num_rows() ;
                                        $kp = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL006' ")->num_rows() ;
                                        $personal = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL007' ")->num_rows() ;
                                        $keuangan = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL008' ")->num_rows() ;
                                        $lainnya = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL009' ")->num_rows() ;

                                        ?>
                                        <ul class="list-style-none">
                                            <li class="mt-2">
                                                <i class="fas fa-circle mr-1 font-12" style="color:#00E0FF "></i> Perkuliahan 
                                                <span class="float-right"><?php echo $perkuliahan ?> Data</span>
                                            </li>
                                            <li class="mt-2">
                                                <i class="fas fa-circle mr-1  font-12" style="color:#000FFF "></i> KRS 
                                                <span class="float-right"><?php echo $KRS ?> Data</span>
                                            </li>
                                            <li class="mt-2">
                                                <i class="fas fa-circle mr-1  font-12" style="color:#CD00FF "></i> PRS 
                                                <span class="float-right"><?php echo $PRS ?> Data</span>
                                            </li>
                                            <li class="mt-2">
                                                <i class="fas fa-circle mr-1  font-12" style="color:#FF002B "></i> Permasalahan Nilai 
                                                <span class="float-right"><?php echo $nilai ?> Data</span>
                                            </li>
                                            <li class="mt-2">
                                                <i class="fas fa-circle mr-1  font-12" style="color:#27FF00 "></i> SKRIPSI
                                                <span class="float-right"><?php echo $SKRIPSI ?> Data</span>
                                            </li>
                                            <li class="mt-2">
                                                <i class="fas fa-circle mr-1  font-12" style="color:#00F2C2 "></i> Kerja Praktek 
                                                <span class="float-right"><?php echo $kp ?> Data</span>
                                            </li>
                                            <li class="mt-2">
                                                <i class="fas fa-circle mr-1  font-12" style="color:#2BAC0C "></i> Personal 
                                                <span class="float-right"><?php echo $personal ?> Data</span>
                                            </li>
                                            <li class="mt-2">
                                                <i class="fas fa-circle mr-1  font-12" style="color:#0CACAA "></i> Keuangan 
                                                <span class="float-right"><?php echo $keuangan ?> Data</span>
                                            </li>
                                            <li class="mt-2">
                                                <i class="fas fa-circle mr-1  font-12" style="color:#F29E00 "></i> Lainnya 
                                                <span class="float-right"><?php echo $lainnya ?> Data</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Artikel Baru</h4>
                            </div>
                           
                            <div class="comment-widgets scrollable" style="height:360px;">
                                 <?php foreach ($article as $a ) { 
                                    $str = $a->date;
                                    $date = date('d M g:i A ', strtotime($str));
                                    if ($a->status == '1') {
                                        $status = '<span class="label label-rounded label-success">Posted</span>';
                                    }else{
                                        $status = '<span class="label label-rounded label-primary">Draft</span>';
                                    }
                                    ?>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2"><img src="<?php echo base_url().$a->photo?>" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium"><?php echo $a->name ?></h6>
                                        <span class="mb-3 d-block"><?php echo $a->title ?> </span>
                                        <div class="comment-footer">
                                            <?php echo $status; ?>
                                            <span class="text-muted float-right"><?php echo $date ?></span> 
                                        </div>
                                    </div>
                                </div>
                                 <?php } ?>

                            </div>
                            <hr>
                             <div class="col-md-12 d-flex justify-content-center mb-3">
                                <a href="<?php echo base_url('article/article') ?>" class=" col-md-9 font-17 btn btn-primary btn-rounded" >Lihat Semua</a>
                            </div>
                        </div>
                    </div>

                   

                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
       </div>

   <?php }
    include(APPPATH.'views/dosen/script/js_dashboard.php'); 

    ?>
