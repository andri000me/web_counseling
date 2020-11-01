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
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url('admin/user/data_user_college')?>"><?php echo $page ?> </a></li>
                                   
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

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
                                 <h4 class="card-title" id="title-user">Data Mahasiswa </h4>
                                    <div class="ml-auto">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" class="btn btn-dark"  onclick="add_college()" >
                                                <i class="mdi mdi-account-plus"></i> Tambah Mahasiswa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="table_college" class="table table-bordered nowrap display table_college">
                                        <thead>
                                            <tr>
                                                <th >Aksi</th>
                                                <th>Nama Lengkap</th>
                                                <th>NIM</th>
                                                <th>Jurusan</th>
                                                <th>Angkatan</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Email</th>
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
                    <div class="col-lg-4 col-xl-3 col-md-3">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="list-group ">
                                    <a href="#" class="list-group-item active"><i class="ti-menu mr-2"></i>Data Mahasiswa</a>
                                    <a href="javascript:void(0)" class="list-group-item"><i class="ti-angle-right mr-2"></i>Semua Mahasiswa</a>
                                    <a href="javascript:void(0)" class="list-group-item"><i class="ti-angle-right mr-2"></i>Mahasiswa Yang Diblokir</a>
                                <h4 class="card-title mt-4">Import Data</h4>
                                <div class="list-group">
                                    <a href="javascript:void(0)" id="modal_import" class="list-group-item">  
                                        <span class="badge badge-info mr-2"><i class="ti-import"></i></span> Import Data User
                                    </a>
                                    
                                </div>
                                <h4 class="card-title mt-4">Rekap Data</h4>
                                <div class="list-group">
                                    <a href="<?php echo base_url('excel/report/report_data_college'); ?>" class="list-group-item">  
                                        <span class="badge badge-info mr-2"><i class="ti-export"></i></span> Rekap Data Mahasiswa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
            </div>

            <!-- tambah data modal -->
            <div class="modal fade modaladduser" id="modaladduser" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form id="form_add_user" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel"><i class="ti-plus mr-2"></i>Tambah Mahasiswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" value="" name="id"/> 
                                <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" aria-label="name" name="name" id="name">
                                     <div class="invalid-feedback ml-5 errorname">
                                      </div>
                                </div>
                                 <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-marker-alt text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan NIM" aria-label="nim" name="nim" id="nim">
                                    <div class="invalid-feedback ml-5 errornim">
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
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success btn_simpan_user"><i class="ti-save"></i> Simpan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>

         <!-- edit data modal -->
            <div class="modal fade modaledit" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form id="form_edit" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel"><i class="ti-plus mr-2"></i>Tambah Mahasiswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           <div class="modal-body">
                                <input type="hidden" value="" name="id"/> 
                                <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" aria-label="name" name="name" id="edit_name">
                                     <div class="invalid-feedback ml-5 errorname">
                                      </div>
                                </div>
                                 <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-marker-alt text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan NIM" aria-label="nim" name="nim" id="edit_nim">
                                    <div class="invalid-feedback ml-5 errornim">
                                      </div>
                                </div>
                                <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-marker-alt text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan Email" aria-label="email" name="email" id="edit_email">
                                </div>
                                <div class="input-group pt-1">
                                    <button type="button" class="btn btn-info"><i class="ti-marker-alt text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Masukan No Telepon" aria-label="no_telp" name="no_telp" id="edit_no_telp">
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
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success btn_edit"><i class="ti-save"></i> Edit</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>

         <!-- modal import -->
            <div class="modal fade modalimport" id="modalimport" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
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
                                            <a class="btn btn-info text-white col-md-12 p-3" href="<?php echo base_url("excel/import/format_import_college"); ?>">Unduh Format Import</a>
                                        </div>

                                        <div class="col-md-12">
                                            <button class="btn btn-primary col-md-12 p-3 mt-2" type="button" data-toggle="collapse" data-target="#collapse_import" aria-expanded="false" aria-controls="collapse_import">
                                            Import Data
                                            </button>

                                            <div class="collapse" id="collapse_import">
                                                <div class="card card-body">
                                                    <form action="<?php echo base_url('excel/import/import_data_college')?>" class="dropzone" id="formimport" style="width: 100%" enctype="multipart/form-data" method="post">
                                                        <div class="fallback">
                                                            <input name="input_import" id="input_import" type="file" />
                                                        </div>
                                                       
                                                    </form>
                                                     <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success col-md-12" id="btn_import" ><i class="ti-import"></i> Import</button>
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


            <?php
            include(APPPATH.'views/admin/script/js_college.php'); 
            ?>