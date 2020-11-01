 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Halaman Profil</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Manajemen User</li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url('admin/user/data_user_college')?>">Data User </a></li>
                                    <li class="breadcrumb-item" aria-current="page"><?php echo $page ?> </a></li>
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
                <!-- Row -->

                <?php foreach ($user as $u ) { ?>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="<?php echo base_url().$u->photo ?>" class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2"><?php echo $u->name; ?></h4>
                                </center>
                            </div>
                            <div>
                                <hr> 
                            </div>
                            <div class="card-body"> 
                                <small class="text-muted pt-4 db">NIM</small>
                                <h6><?php echo $u->nim ?></h6> 
                                <small class="text-muted">Email address </small>
                                <h6><?php echo $u->email ?></h6> 
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                                    <div class="card-body">
                                         <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Detail Mahasiswa</h4>
                                    </div>
                                    <div class="ml-auto d-flex no-block align-items-center">
                                        <div class="dl">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="table-responsive col-md-9">
                                        <table class="table no-border">
                                            <tbody>
                                                <tr>
                                                    <td><b>NIM</td>
                                                    <td><?php echo $u->nim; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>NAMA</td>
                                                    <td><?php echo $u->name; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Email</td>
                                                    <td><?php echo $u->email; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>No Telepon</td>
                                                    <td><?php echo $u->no_telp; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Jurusan</td>
                                                    <td><?php echo $u->prodi; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Jenis Kelamin</td>
                                                    <td><?php echo $u->gender; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Angkatan</td>
                                                    <td><?php echo $u->generation; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Status Mahasiswa</td>
                                                    <td><?php echo $u->status_user; ?></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</div>
</div>