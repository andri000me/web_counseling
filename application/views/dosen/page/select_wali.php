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
                                    <li class="breadcrumb-item">Perwalian</li>
                                    <li class="breadcrumb-item" aria-current="page" ><a href="javascript:void(0)" onclick="window.history.back();">Aktifitas Mahasiswa</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href=""><?php echo $page ?> </a></li>
                                   
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
                                            <h4 class="card-title">Data Dosen</h4>
                                        </div>
                                        <div class="col-md-7">
                                            <table class="table no-border">
                                                <tbody>
                                                    <?php foreach ($staff as $staff) {?>
                                                        <input type="hidden" id="nidn" value="<?php echo $staff->nidn ?>">
                                                    <tr>
                                                        <td class="max-text">Nama Dosen</td>
                                                        <td class="font-medium"><?php echo $staff->name; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>NIDN</td>
                                                        <td class="font-medium"><?php echo $staff->nidn; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Prodi</td>
                                                        <td class="font-medium"><?php echo $staff->prodi; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr>
                                        <h4 class="card-title">Pemilihan Mahasiswa</h4>
                                            <div class="container">
                                                <br />
                                                <div class="row">

                                                    <div class="dual-list list-left col-md-5" >
                                                        <span class="font-medium">Data Mahasiswa</span>
                                                        <hr>
                                                        <div class="well">
                                                            <div class="input-group">
                                                                <input type="text" name="SearchDualList" class="form-control" placeholder="Cari Mahasiswa" />
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <div class="custom-control custom-checkbox mr-sm-2">
                                                                            <input type="checkbox" class="custom-control-input selector" id="checkbox4" title="select all" value="check">
                                                                            <label class="custom-control-label" for="checkbox4"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="list-group" id="get_mhs_notselected" style="margin-bottom: 10px; overflow:scroll; -webkit-overflow-scrolling: touch; max-height: 200px;">
                                                                <?php foreach ($college_unselect as $user) { ?>
                                                                <li class="list-group-item" value="<?php echo $user->nim; ?>"><?php echo $user->nim; ?> | <?php echo $user->name; ?></li>

                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="list-arrows col-md-1 text-center" style="margin-top: 10%;">

                                                        <button class="btn btn-primary btn-sm mt-2 move-right">
                                                            <span class="mdi mdi-arrow-right-bold"></span>
                                                        </button>
                                                        <button class="btn btn-danger btn-sm mt-2 move-left">
                                                            <span class="mdi mdi-arrow-left-bold"></span>
                                                        </button>

                                                    </div>

                                                    <div class="dual-list list-right col-md-5" >
                                                        <span class="font-medium">Mahasiswa Yang Dipilih</span>
                                                        <hr>
                                                        <div class="well">
                                                            <div class="input-group">
                                                                <input type="text" name="SearchDualList" class="form-control" placeholder="Cari Mahasiswa" />
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <div class="custom-control custom-checkbox mr-sm-2">
                                                                            <input type="checkbox" class="custom-control-input selector" id="checkbox1" title="select all" value="check">
                                                                            <label class="custom-control-label" for="checkbox1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="list-group" id="get_mhs_selected" style="margin-bottom: 10px; overflow:scroll; -webkit-overflow-scrolling: touch; max-height: 200px;">
                                                                <?php foreach ($college_selected as $user) { ?>
                                                                <li class="list-group-item" value="<?php echo $user->nim; ?>"><?php echo $user->nim; ?> | <?php echo $user->name; ?></li>
                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        <div class="d-flex align-items-center mt-3">
                                            <div class="ml-auto ">
                                                <button type="button" id="btn-pilih" class="btn btn-primary  "><i class="fa fa-save"></i> Simpan</button>
                                                <button type="button" onclick="location.reload();" id="btn-reset" class="btn btn-warning  "><i class="fa fa-sync-alt"></i> Reset</button>
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
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>



    <?php
        include(APPPATH.'views/dosen/script/js_perwalian.php'); 
    ?>