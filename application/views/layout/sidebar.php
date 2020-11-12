
<?php

$no_unique = $this->session->userdata('no_unique');
$role = $this->session->userdata('role');
if($role != 'MHS'){
$data = $this->db->query("SELECT * FROM ms_users_staff WHERE nidn = $no_unique ")->result() ;
}else{
$data = $this->db->query("SELECT * FROM ms_users_college WHERE nim = $no_unique ")->result() ;    
}
?>

<!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <?php foreach ($data as $d ) { ?>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown mt-3">
                                <div class="user-pic"><img src="<?php echo base_url().$d->photo ?>" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu ml-2">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="mb-0 user-name font-medium"><?php echo $d->name; ?> <i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email"><?php echo $d->email; ?> </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="<?php echo base_url('profile/profile') ?>"><i class="ti-user mr-1 ml-1"></i> Profil Saya</a>
                                        <a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        <?php } ?>
                        </li>


                      
                        <!-- User Profile-->
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Dashboard</span></li>
                        <li class="sidebar-item"> <a href="<?php echo base_url('admin/dashboard')?>" class="sidebar-link waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard </span></a>
                        </li>

                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Manajemen Konseling</span></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?php echo base_url('admin/konseling')?>"  aria-expanded="false"><i class="mdi mdi-book-multiple-variant"></i><span class="hide-menu">Konseling</span></a>
                        </li>
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?php echo base_url('admin/konseling/perwalian')?>"  aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Perwalian Mahasiswa</span></a>
                        </li>

                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Manajemen User</span></li>
                        <li class="sidebar-item"><a href="<?php echo base_url('admin/user/data_user')?>" class="sidebar-link  waves-dark" aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Data Pendidik</span></a>
                        </li>
                       
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?php echo base_url('admin/user/data_user_college')?>"  aria-expanded="false"><i class="mdi mdi-account-box-outline"></i><span class="hide-menu">Data Mahasiswa </span></a>
                        </li>

                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Ekstra</span></li>
                        <li class="sidebar-item"><a href="<?php echo base_url('article/article')?>" class="sidebar-link  waves-dark" aria-expanded="false"><i class="mdi mdi-newspaper"></i><span class="hide-menu">Artikel</span></a>
                        </li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->