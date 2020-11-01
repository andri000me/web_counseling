 <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Email App Part -->
            <!-- ============================================================== -->
            <div class="email-app">
                <!-- ============================================================== -->
                <!-- Left Part -->
                <!-- ============================================================== -->
                <div class="left-part">
                    <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
                    <div class="scrollable" style="height:100%;">
                        <div class="p-3">Menu
                        </div>
                        <div class="divider"></div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="active list-group-item-action"><i class="mdi mdi-inbox"></i> Semua Pengajuan <span class="label label-success float-right">6</span></a>
                            </li>
                            <li class="list-group-item">
                                <hr>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-chevron-right"></i> Perkuliahan </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-chevron-right"></i> Kartu Rencana Studi <span class="label label-danger float-right">3</span></a></li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-chevron-right"></i> Pra-Rencana Studi </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-chevron-right"></i> Permasalahan Nilai </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-chevron-right"></i> SKRIPSI </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-chevron-right"></i> Kerja Praktek </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-chevron-right"></i> Permasalahan Personal </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-chevron-right"></i> Lainnya </a>
                            </li>
                            <li class="list-group-item">
                                <hr>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-block-helper"></i> Spam </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-delete"></i> Trash </a>
                            </li>
                            <li class="list-group-item">
                                <hr>
                            </li>
                            <li>
                                <small class="p-3 grey-text text-lighten-1 db">Labels</small>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"><i class="text-danger mdi mdi-checkbox-blank-circle"></i> Work </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"><i class="text-cyan mdi mdi-checkbox-blank-circle"></i> Business </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"><i class="text-warning mdi mdi-checkbox-blank-circle"></i> Family </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)" class="list-group-item-action"><i class="text-info mdi mdi-checkbox-blank-circle"></i> Friends </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Right Part -->
                <!-- ============================================================== -->
                <div class="right-part mail-list bg-white">
                    <div class="p-3 b-b">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4><?php echo $page ?></h4>
                                <small>Manajemen Konseling <i class="mdi mdi-chevron-right"></i><a href="">Pengajuan Konseling</a><span id="page"></span></small>
                            </div>
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Button group part -->
                    <div class="bg-light p-3 d-flex align-items-center do-block">
                        <div class="btn-group mt-1 mr-3 mb-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input sl-all" id="cstall">
                                <label class="custom-control-label" for="cstall">Pilih Semua</label>
                            </div>
                        </div>
                        <div class="btn-group mt-1 mb-1 col-md-6">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-search"></i></span>
                                  </div>
                                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="filter_pengajuan">
                        </div>
                        <div class="ml-auto">
                            <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" onclick="reload_table_konseling();" class="btn btn-outline-secondary font-18"><i class="mdi mdi-reload"></i></button>
                                <button type="button" class="btn btn-outline-secondary font-18 delete_pengajuan" id="delete_pengajuan"><i class="mdi mdi-delete"></i></button>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-reorder-horizontal font-18"></i> Filter By </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> 
                                        <a type="button" href="" class="dropdown-item" >Semua</a> 
                                        <a type="button" label="Pending" data-id="5" class="dropdown-item orderby_pengajuan" >Pending</a> 
                                        <a type="button" label="Diterima" data-id="1" class="dropdown-item orderby_pengajuan">Diterima</a>
                                        <a type="button" label="Ditolak" data-id="4" class="dropdown-item orderby_pengajuan">Ditolak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Mail list-->
                    <div class="table-responsive">
                        <table id="table_pengajuan" class="table email-table no-wrap table-hover v-middle table_pengajuan">
                                <thead>
                                            <tr>
                                                <th width="3%"></th>
                                                <th width="3%"></th>
                                                <th width="25%">Mahasiswa</th>
                                                <th width="20%">Jenis Konseling</th>
                                                <th width="10%"></th>
                                                <th width="15%"></th>
                                                <th width="10%" ></th>
                                            </tr>
                                        </thead>
                                      <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>


    <?php
        include(APPPATH.'views/admin/script/js_konseling.php');  
    ?>