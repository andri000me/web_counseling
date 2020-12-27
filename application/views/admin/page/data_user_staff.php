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
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url('Admin/user/data_user')?>"><?php echo $page ?> </a></li>
                                   
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
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-xl-9 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center mb-4">
                                 <h4 class="card-title" id="title-user">Data Staff </h4>
                                    <div class="ml-auto">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" class="btn btn-dark"  onclick="add_user()" >
                                                <i class="mdi mdi-account-plus"></i> Tambah User Baru 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="table_user" class="table table-bordered nowrap display table_user">
                                        <thead>
                                            <tr>
                                                <th >Aksi</th>
                                                <th>Nama Lengkap</th>
                                                <th>NIDN</th>
                                                <th>Hak Akses</th>
                                                <th>Prodi</th>
                                                <th>Email</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No Telepon</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-xl-3 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="list-group ">
                                    <a href="#" class="list-group-item active"><i class="ti-menu mr-2"></i>Data Staff</a>
                                    <a href="javascript:void(0)" class="list-group-item"><i class="ti-angle-right mr-2"></i>Data Ketua/Wakil</a>
                                    <a href="javascript:void(0)" class="list-group-item"><i class="ti-angle-right mr-2"></i>Data Dosen/Prodi</a>
                                    <a href="javascript:void(0)" class="list-group-item"><i class="ti-angle-right mr-2"></i>Data Bagian Keuangan</a>
                                </div>

                                <h4 class="card-title mt-4">Import Data</h4>
                                <div class="list-group">
                                    <a href="javascript:void(0)" id="modal_import_user" class="list-group-item">  
                                        <span class="badge badge-info mr-2"><i class="ti-import"></i></span> Import Data User
                                    </a>
                                    
                                </div>
                                <div class="d-flex no-block align-items-center ">
                                    <h4 class="card-title mt-4">Rekap Data</h4>
                                </div>
                                <div class="list-group">
                                    <a href="<?php echo base_url('Excel/report/report_data_user/ALL'); ?>" class="list-group-item">  
                                        <span class="badge badge-info mr-2"><i class="ti-export"></i></span> Rekap Semua Data
                                    </a>
                                    <a href="<?php echo base_url('Excel/report/report_data_user/KTA'); ?>"  class="list-group-item">
                                        <span class="badge badge-warning text-white mr-2"><i class="ti-export"></i></span> Rekap Ketua/Wali
                                    </a>
                                    <a href="<?php echo base_url('Excel/report/report_data_user/DSN'); ?>"  class="list-group-item">
                                        <span class="badge badge-primary text-white mr-2"><i class="ti-export"></i></span> Rekap Data Dosen Wali
                                    </a>
                                    <a href="<?php echo base_url('Excel/report/report_data_user/BKU'); ?>"  class="list-group-item">
                                        <span class="badge badge-danger text-white mr-2"><i class="ti-export"></i></span> Rekap Data Bagian Keuangan
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            
            <!-- tambah data modal -->
            <div class="modal fade modaladduser" id="modaladduser" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form id="form_add_user">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel"><i class="ti-plus mr-2"></i>Tambah User Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" value="" name="id"/> 
                                <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan Nama" aria-label="name" name="name" id="name">
                                     <div class="invalid-feedback ml-5 errorname">
                                      </div>
                                </div>
                                 <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-marker-alt text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan NIDN" aria-label="nidn" name="nidn" id="nidn">
                                    <div class="invalid-feedback ml-5 errornidn">
                                      </div>
                                </div>
                                 <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class=" ti-email text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan E-Mail" aria-label="email" name="email" id="email">
                                    <div class="invalid-feedback ml-5 erroremail">
                                      </div>
                                </div>
                                <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
                                    <select class="form-control" name="gender" id="gender">
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <div class="invalid-feedback ml-5 errorgender">
                                      </div>
                                </div>
                                <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
                                    <select class="form-control" name="role" id="role">
                                        <option selected disabled>Pilih Hak Akses</option>
                                        <?php foreach ($role as $row){ ?>
                                        <option value="<?php echo $row->kode_role;?>"><?php echo $row->role;?></option>
                                        <?php };?>
                                    </select>
                                    <div class="invalid-feedback ml-5 errorrole">
                                      </div>
                                </div>
                                 <div class="input-group pt-1 prod" id="prod" style="display: none;">
                                    <button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
                                    <select class="form-control" name="prodi" id="prodi">
                                         <option selected value="" readonly>Pilih Prodi</option>
                                    </select>
                                    <div class="invalid-feedback ml-5 errorprodi">
                                      </div>
                                </div>
                                <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class=" ti-mobile text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan Nomor Telepon" aria-label="no" onkeypress ="return numeric(event);" name="no_telp" id="no_telp">
                                    <div class="invalid-feedback ml-5 errorno_telp">
                                      </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success btn_simpan_user"><i class="ti-save"></i> Simpan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            </div>
                       </form>
                    </div>
                </div>
            </div>

              <!-- edit data modal -->
            <div class="modal fade modaledituser" id="modaledituser" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form id="form_edit_user">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel"><i class="ti-plus mr-2"></i>Edit User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" value="" name="id"/> 
                                <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan Nama" aria-label="name" name="name" id="edit_name">
                                     <div class="invalid-feedback ml-5 errorname">
                                      </div>
                                </div>
                                 <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-marker-alt text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan NIDN" aria-label="nidn" name="nidn" id="edit_nidn">
                                    <div class="invalid-feedback ml-5 errornidn">
                                      </div>
                                </div>
                                 <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class=" ti-email text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan E-Mail" aria-label="email" name="email" id="edit_email">
                                    <div class="invalid-feedback ml-5 erroremail">
                                      </div>
                                </div>
                                <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
                                    <select class="form-control" name="gender" id="edit_gender">
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <div class="invalid-feedback ml-5 errorgender">
                                      </div>
                                </div>
                                <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
                                    <select class="form-control" name="role" id="edit_role">
                                        <option selected disabled>Pilih Hak Akses</option>
                                        <?php foreach ($role as $r){ ?>
                                        <option value="<?php echo $r->kode_role;?>"><?php echo $r->role;?></option>
                                        <?php };?>
                                    </select>
                                    <div class="invalid-feedback ml-5 errorrole">
                                      </div>
                                </div>
                                <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
                                    <select class="form-control" name="prodi" id="edit_prodi">
                                        <option selected disabled>Pilih Prodi</option>
                                        <?php foreach ($prodi as $p){ ?>
                                        <option value="<?php echo $p->id;?>"><?php echo $p->prodi;?></option>
                                        <?php };?>
                                    </select>
                                    <div class="invalid-feedback ml-5 errorprodi"></div>
                                </div>
                                <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class=" ti-mobile text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan Nomor Telepon" aria-label="no" onkeypress ="return numeric(event);" name="no_telp" id="edit_no_telp">
                                    <div class="invalid-feedback ml-5 errorno_telp"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success btn_edit_user"><i class="ti-save"></i> Edit</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            </div>
                       </form>
                    </div>
                </div>
            </div>

            <!-- modal import -->
            <div class="modal fade modalimportuser" id="modalimportuser" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel"><i class="ti-pencil mr-2"></i>Import data pendidik</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" value="" name="id"/> 
                                 <div class="container-fluid">
                                    <div class="row mt-3">

                                        <div class="col-md-12">
                                            <a class="btn btn-info text-white col-md-12 p-3" href="<?php echo base_url("Excel/import/format_import_user"); ?>">Unduh Format Import</a>
                                        </div>

                                        <div class="col-md-12">
                                            <button class="btn btn-primary col-md-12 p-3 mt-2" type="button" data-toggle="collapse" data-target="#collapse_import" aria-expanded="false" aria-controls="collapse_import">
                                            Import Data
                                            </button>

                                            <div class="collapse" id="collapse_import">
                                                <div class="card card-body">
                                                    <form action="<?php echo base_url('Excel/import/import_data_user')?>" class="dropzone" id="formimportuser" style="width: 100%" enctype="multipart/form-data" method="post">
                                                        <div class="fallback">
                                                            <input name="input_import_user" id="input_import_user" type="file" />
                                                        </div>
                                                       
                                                    </form>
                                                     <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success col-md-12" id="btn_import_user" ><i class="ti-import"></i> Import</button>
                                                        </div>
                                                        
                                                </div>
                                            </div>

                                        </div>

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
            <!-- footer -->
            <!-- ============================================================== -->
       
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>

           <?php
            include(APPPATH.'views/admin/script/js_user.php'); 
            ?>