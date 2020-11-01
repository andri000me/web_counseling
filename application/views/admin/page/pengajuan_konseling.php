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
                                    <li class="breadcrumb-item">Manajemen Konseling</li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url('admin/konseling/pengajuan_konseling')?>"><?php echo $page ?> </a></li>
                                   
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
                                <h4 class="card-title" id="title-konseling">Data Pengajuan</h4>
                                <div class="row mt-5">
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="box bg-info text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-television"></i></h1>
                                                <h6 class="text-white">Pengajuan Konseling Online</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <a href="#" onclick="return  pengajuan_offline();">
                                        <div class="card card-hover">
                                            <div class="box bg-primary text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-account-multiple-outline"></i></h1>
                                                <h6 class="text-white">Pengajuan Konseling Offline</h6>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="box bg-success text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-account-check"></i></h1>
                                                <h6 class="text-white">Pengajuan Diterima</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div class="box bg-dark text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-account-off"></i></h1>
                                                <h6 class="text-white">Pengajuan Ditolak</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>
                                <div class="table-responsive">
                                    <table id="table_pengajuan_konseling" class="table table-striped table-bordered table_pengajuan_konseling">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Jenis Konseling</th>
                                                <th>Pilihan Konseling</th>
                                                <th>Judul</th>
                                                <th>Mahasiswa</th>
                                                <th>Konselor</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
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
        </div>