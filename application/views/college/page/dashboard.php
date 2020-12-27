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
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Alur Konseling</h4>
                                <ul class="timeline timeline-left">
                                    <li class="timeline-inverted timeline-item">
                                        <div class="timeline-badge danger">1</div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">Pengajuan Konseling</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted timeline-item">
                                        <div class="timeline-badge primary">2</div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">Pengajuan Diterima Oleh Konselor</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted timeline-item">
                                        <div class="timeline-badge info">3</div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">Mulai Konsultasi</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted timeline-item">
                                        <div class="timeline-badge success">4</div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">Hasil Konsultasi</h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="profile-pic m-b-20 m-t-20">
                                    <img src="<?php echo base_url().$user->photo ?>" width="150" class="rounded-circle" alt="user">
                                    <h4 class="m-t-20 m-b-0"><?php echo $user->name; ?></h4>
                                </div>
                            </div>
                            <div class="p-25 border-top m-t-15">
                                <div class="row text-center">
                                    <div class="col-12 ">
                                        <a href="<?php echo base_url('Profile/profile/profile_college')?>" class="link d-flex align-items-center justify-content-center font-medium"><i class="mdi mdi-account font-20 m-r-5"></i>Lihat Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php } ?>
                        <?php foreach ($last_consult as $last ) {
                        $stat = $last->id_consult_status;
                        if($stat == '1'){
                            $status = '<span class="label label-success mr-2">Diterima</span>';
                        }else if($stat == '2'){
                            $status = '<span class="label label-primary mr-2">Progress</span>';
                        }else if($stat == '3'){
                            $status = '<span class="label label-success mr-2">Selesai</span>';
                        }else if($stat == '4'){
                            $status = '<span class="label label-danger mr-2">Ditolak</span>';
                        }else if($stat == '5'){
                            $status = '<span class="label label-warning mr-2">Pending</span>';
                        }

                        $str = $last->date;
                        $date = date('d M g:i A ', strtotime($str)); 
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Konseling Terbaru</h4>
                            </div>
                            <div class="card-body bg-light">
                                <div class="row text-center">
                                    <div class="col-6 m-t-10 m-b-10">
                                        <?php echo $status; ?>
                                    </div>
                                    <div class="col-6 m-t-10 m-b-10">
                                        <?php echo $date; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="p-t-20">Tipe Konsultasi</h5>
                                <span><?php echo $last->selection; ?></span>
                                <h5 class="m-t-30">Konselor</h5>
                                <span><?php echo $last->name; ?></span>
                                <br/>
                                <a href="<?php echo base_url('College/konseling')?>" class="m-t-20 btn waves-effect waves-light btn-success">Lihat</a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
    

       <script type="text/javascript">
            $(document).ready(function(){
          

        toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-bottom-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        Command: toastr["info"]("Selamat datang di halaman Dashboard")
      })
       </script>