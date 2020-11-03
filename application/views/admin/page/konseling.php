 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
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
                        <div class="p-3">
                          
                        </div>
                        <div class="divider"></div>
                        <ul class="list-group">
                            <li>
                                <small class="p-3 grey-text text-lighten-1 db">Konseling</small>
                            </li>
                            <li class="list-group-item">
                                <a href=""  class="list-group-item-action" id="status_terbaru"><i class="mdi mdi-inbox"></i> Terbaru </a>
                            </li>

                            <li class="list-group-item">
                                <hr>
                            </li>

                            <li class="list-group-item">
                                <a type="button" label="Pending" data-id="5" class="list-group-item-action status_consult" id="status_pending"> <i class="mdi mdi-reload"></i> Pending </a>
                            </li>
                            <li class="list-group-item">
                                <a type="button" label="Diterima" data-id="1" class="list-group-item-action status_consult" id="status_diterima"> <i class="mdi mdi-check"></i> Diterima </a>
                            </li>
                            <li class="list-group-item">
                                <a type="button" label="Ditolak" data-id="4" class="list-group-item-action status_consult" id="status_ditolak"> <i class="mdi mdi-block-helper"></i> Ditolak </a>
                            </li>

                            <li class="list-group-item">
                                <hr>
                            </li>

                            <li class="list-group-item">
                                <a type="button" label="Berlangsung" data-id="2" class="list-group-item-action status_consult" id="status_berlangsung"> <i class="mdi mdi-star"></i> Sedang Berlangsung </a>
                            </li>
                            <li class="list-group-item">
                                <a type="button" label="Selesai" data-id="3" class="list-group-item-action status_consult" id="status_selesai"> <i class="mdi mdi-bookmark-check"></i> Selesai </a>
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
                                <small>Konseling<i class="mdi mdi-chevron-right"></i><a href="">Aktifitas Konseling</a><span id="page"></span></small>
                            </div>
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Button group part -->
                    <div class="bg-light p-3 d-flex align-items-center do-block">
                        <div class="btn-group mt-1 mb-1 col-md-6">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-search"></i></span>
                                  </div>
                                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="search_konseling">
                        </div>
                        <div class="ml-auto">
                            <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" onclick="reload_table_konseling();" class="btn btn-outline-secondary font-18"><i class="mdi mdi-reload"></i></button>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-reorder-horizontal font-18"></i> Jenis Konseling </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> 
                                        <a type="button" href="" class="dropdown-item" >Semua</a> 
                                        <?php foreach ($selection as $s) { ?>
                                        <a type="button" label="<?php echo $s->selection ?>" data-id="<?php echo $s->kode_selection ?>" class="dropdown-item filterby" ><?php echo $s->selection ?></a>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Mail list-->

                    <div class="table-responsive">
                        <table id="table_konseling" class="table email-table no-wrap table-hover v-middle table_konseling">
                                <thead>
                                            <tr>
                                                <th width="5%"></th>
                                                <th >Konselor</th>
                                                <th >Mahasiswa</th>
                                                <th>Jenis Konseling</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
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

    <?php
        include(APPPATH.'views/admin/script/js_konseling.php');  
    ?>