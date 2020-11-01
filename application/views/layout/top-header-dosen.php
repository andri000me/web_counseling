<?php

$no_unique = $this->session->userdata('no_unique');
$role = $this->session->userdata('role');
if($role != 'MHS'){
$data = $this->db->query("SELECT * FROM ms_users_staff WHERE nidn = $no_unique ")->result() ;
}else{
$data = $this->db->query("SELECT * FROM ms_users_college WHERE nim = $no_unique ")->result() ;    
}

$consult_notif = $this->Mnotif->getnotifconsult($no_unique);
?>
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
         <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand">
                        <b class="logo-icon">
                            <img src="<?php echo base_url()?>assets/assets/images/logo/stmik.png" width="50" alt="homepage" class="dark-logo" />
                            <img src="<?php echo base_url()?>assets/assets/images/logo/stmik.png" width="50" alt="homepage" class="light-logo" />
                        </b>
                        <span class="logo-text mt-3">
                             <h4 class="dark-logo">E-COUNSELING</h4>
                             <h4 class="light-logo text-white">E-COUNSELING</h4>
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right ">
                       
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > <i class="mdi mdi-bell font-24 "></i>
                                <span class="badge badge-pill  badge-danger font-10 float-right" style="margin-left: -10px; margin-top: 36%; position: relative;" id="count_consult"><!-- notif --></span>
                                
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title bg-primary text-white">
                                            <h4 class="mb-0 mt-1" id="h4_count_consult"><!-- notif --></h4>
                                            <span class="font-light">Notifikasi Pengajuan Konseling</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications" id="notif_consult_realtime">
                                            <?php foreach ($consult_notif as $cn ) { 
                                                $str = $cn->date;
                                                $time = date('d M g:i A ', strtotime($str));
                                                $readed = $cn->readed;
                                                ?>

                                            <!-- Message -->
                                            <?php if ($readed == '0'){ ?>
                                                <a type="button" label="<?php echo $cn->name ?>" class="message-item bg-muted notif_consult" data-id="<?php echo $cn->id_consult ?>" >
                                                    <img src="<?php echo base_url().$cn->photo ?>" alt="user"
                                                    class="rounded-circle" width="40" />
                                                    <div class="mail-contnet">
                                                        <h5 class="message-title"><?php echo $cn->name ?> 
                                                            <span class="label label-danger float-right">Baru</span> 
                                                        </h5>
                                                        <span class="mail-desc"><?php echo $cn->title; ?></span> 
                                                        <span class="time"><?php echo $time ?></span> </div>
                                                </a>

                                            <?php }else{ ?>
                                                 <a type="button" label="<?php echo $cn->name ?>" class="message-item notif_consult" data-id="<?php echo $cn->id_consult ?>" >
                                                    <img src="<?php echo base_url().$cn->photo ?>" alt="user"
                                                class="rounded-circle" width="40" />
                                                    <div class="mail-contnet">
                                                        <h5 class="message-title"><?php echo $cn->name ?>  
                                                        </h5>
                                                        <span class="mail-desc"><?php echo $cn->title; ?></span> 
                                                        <span class="time"><?php echo $time ?></span> </div>
                                                </a>
                                                <?php
                                                    } 
                                                } 
                                                ?>
                                        </div>
                                    </li>
                                     <li>
                                        <a type="button" label="Pending" data-id="5" href="javascript:void(0)"  id="status_pending"   class="nav-link text-center mb-1 text-dark status_consult" > <strong>Lihat Semua</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <?php foreach ($data as $d ) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url().$d->photo ?>" alt="user" class="rounded-circle " width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white mb-2">
                                    <div class=""><img src="<?php echo base_url().$d->photo ?>" alt="user" class="img-circle" width="60"></div>
                                    <div class="ml-2">
                                        <h4 class="mb-0"><?php echo $d->name; ?></h4>
                                        <p class=" mb-0"><?php echo $d->email; ?></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                                <a class="dropdown-item" href="<?php echo base_url('auth/logout')?>"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                            </div>
                        </li>
                    <?php } ?>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->

        <script type="text/javascript">
            $(document).ready(function(){
                setInterval(function(){
                    $.ajax({
                        url:"<?php echo base_url('dosen/notification/count_consult')?>",
                        type:"POST",
                        dataType:"JSON",
                        data:{},
                        success:function(data){
                           $('#count_consult').html(data.count_consult);
                           $('#h4_count_consult').html(data.count_consult+' Baru');
                        }
                    });
                },2000);

                //   function loadlink(){
                //       $('#notif_consult_realtime').load('<?php $consult_notif ?>',function () {
                //             $(this).unwrap();
                //     });
                //   }
                //    loadlink(); // This will run on page load
                //   setInterval(function(){
                //      loadlink() // this will run after every 5 seconds
                //  }, 2000);

                })

        </script>