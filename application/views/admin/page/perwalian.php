 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title"><?php echo $page ?></h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Manajemen User</li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url('Admin/konseling/perwalian')?>"><?php echo $page ?> </a></li>
                                   
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
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <h4 class="card-title">Data User</h4>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <table class="table no-border">
                                                <tbody>
                                                    <tr>
                                                        <td class="max-text">Jumlah Dosen Wali</td>
                                                        <td class="font-medium"><?php echo $count_dosen; ?> User</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Mahasiswa</td>
                                                        <td class="font-medium"><?php echo $count_college; ?> User</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr>
                                    </div>
                                <div class="table-responsive">
                                    <table id="table_wali" class="table table-bordered nowrap display table_wali">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Dosen</th>
                                                <th>NIDN</th>
                                                <th>Prodi</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jumlah Mahasiswa</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

    <?php
            include(APPPATH.'views/admin/script/js_perwalian.php'); 
            ?>