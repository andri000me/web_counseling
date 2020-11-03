<!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title"><?php echo $page; ?></h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><?php echo $page; ?></li>
                                </ol>
                            </nav>
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
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->



                <?php foreach ($users_staff as $users ) { ?>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="<?php echo base_url().$users->photo ?>" class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2"><?php echo $users->name ?></h4>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> 
                               <a href="#" data-toggle="modal" data-target="#modal_change_photo"  class="btn btn-primary col-md-12">Ubah Foto Profil</a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tabs -->
                            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="pills-timeline" aria-selected="true"><i class="ti ti-user"></i> Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#setting" role="tab" aria-controls="pills-setting" aria-selected="false"><i class="ti ti-settings"></i> Pengaturan Profil</a>
                                </li>
                            </ul>
                            <!-- Tabs -->
                            <div class="tab-content" id="pills-tabContent">
                                
                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="card-body">
                                    <h6 class="card-title"><i class="m-r-5 font-18 mdi mdi-information"></i> Informasi Saya</h6>
                                    <div class="table-responsive">
                                        <table class="table no-border">
                                            <tbody>
                                                <tr>
                                                    <td width="5%"><i class="ti-flickr"></i></td>
                                                    <td width="30%" class="font-weight-bold">NIDN</td>
                                                    <td><?php echo $users->nidn ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="ti-flickr"></i></td>
                                                    <td width="30%" class="font-weight-bold">Nama Lengkap</td>
                                                    <td><?php echo $users->name ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="ti-flickr"></i></td>
                                                    <td width="30%" class="font-weight-bold">Email</td>
                                                    <td><?php echo $users->email ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="ti-flickr"></i></td>
                                                    <td width="30%" class="font-weight-bold">No Telepon</td>
                                                    <td><?php echo $users->no_telp ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="ti-flickr"></i></td>
                                                    <td width="30%" class="font-weight-bold">Jenis Kelamin</td>
                                                    <td><?php echo $users->gender ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="ti-flickr"></i></td>
                                                    <td width="30%" class="font-weight-bold">Prodi</td>
                                                    <td><?php echo $users->prodi ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="5%"><i class="ti-flickr"></i></td>
                                                    <td width="30%" class="font-weight-bold">Hak Akses</td>
                                                    <td><?php echo $users->role ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                       <a href="#" data-toggle="modal" data-target="#modal_change_profile" class="btn btn-primary col-md-12">Update Profil</a>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="pills-setting-tab">
                                       <div class="card-body">
                                        <h5 class="card-title">Ubah Username Dan Password</h5>
                                        <form class="form-horizontal form-material" enctype="multipart/form-data" id="form_change_auth">
                                            <?php foreach ($auth as $auth) { ?>
                                            <input type="hidden" name="no_unique" value="<?php echo $this->session->userdata('no_unique'); ?>">
                                            <div class="form-group">
                                                <label class="col-md-12">Username Baru</label>
                                                <div class="col-md-12">
                                                    <input type="text" id="username" name="username" placeholder="Username Baru" class="form-control form-control-line">
                                                <div class="invalid-feedback  errorusername"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password Baru</label>
                                                <div class="col-md-12">
                                                    <input type="password" id="password" name="password" placeholder="Password Baru" class="form-control form-control-line">
                                                <div class="invalid-feedback errorpassword"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Ulangi Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" id="confirmpassword" placeholder="Ulangi Password" class="form-control form-control-line">
                                                <div class="font-12" id="errorconfirmpassword"></div>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-success" id="btn_change_auth" >Update Profile</button>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->

                <?php } 
                ?>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

            <?php
            include(APPPATH.'views/profile/modal_change_profile.php'); 
            include(APPPATH.'views/profile/modal_change_photo.php'); 
            include(APPPATH.'views/profile/js_profile.php'); 
            ?>