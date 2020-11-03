<?php
$role = $this->session->userdata('role');

?>
<!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <!-- dosen -->
                        <?php 
                        if($role == 'DSN'){ ?>
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a href="<?php echo base_url('dosen/dashboard')?>" class="sidebar-link waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard </span></a>
                        </li>
                        <li class="sidebar-item"> <a href="<?php echo base_url('dosen/konseling')?>" class="sidebar-link waves-effect waves-dark"  aria-expanded="false"><i class="mdi mdi-book-open"></i><span class="hide-menu">Aktifitas Konseling</span></a>
                        </li>
                        <li class="sidebar-item"> <a href="<?php echo base_url('dosen/konseling/perwalian')?>" class="sidebar-link waves-effect waves-dark"  aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Perwalian Mahasiswa</span></a>
                        
                        </li>
                        <?php } ?>
                        <!-- Keuangan -->
                        <?php if ($role == 'BKU') { ?>

                        <!-- User Profile-->
                        <li class="sidebar-item"> <a href="<?php echo base_url('dosen/dashboard')?>" class="sidebar-link waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard </span></a>
                        </li>
                        <li class="sidebar-item"> <a href="<?php echo base_url('dosen/konseling')?>" class="sidebar-link waves-effect waves-dark"  aria-expanded="false"><i class="mdi mdi-book-open"></i><span class="hide-menu">Aktifitas Konseling</span></a>
                        </li>

                        <?php } ?>

                        <!-- Keuangan -->
                        <?php if ($role == 'KTA') { ?>

                        <!-- User Profile-->
                        <li class="sidebar-item"> <a href="<?php echo base_url('dosen/dashboard')?>" class="sidebar-link waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard </span></a>
                        </li>
                        <li class="sidebar-item"> <a href="<?php echo base_url('dosen/konseling/ketua_consult')?>" class="sidebar-link waves-effect waves-dark"  aria-expanded="false"><i class="mdi mdi-book-open"></i><span class="hide-menu">Report Konseling</span></a>
                        </li>

                        <?php } ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->