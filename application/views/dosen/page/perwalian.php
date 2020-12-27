 <?php
 $nidn = $this->session->userdata('no_unique');
 ?>
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
                <!-- Right Part -->
                <!-- ============================================================== -->
               <div class="mail-list bg-white">
                    <div class="p-3 b-b">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4><?php echo $page ?></h4>
                                <small>Perwalian<i class="mdi mdi-chevron-right"></i><a href="">Aktifitas Mahasiswa</a><span id="page"></span></small>
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
                                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="search">
                        </div>
                        <div class="ml-auto">
                            <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" onclick="reload_table();" class="btn btn-outline-secondary font-18"><i class="mdi mdi-reload"></i></button>
                                <!--
                                 <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modalreportwali"><i class="mdi mdi-import"></i> Report Konseling Wali</button>
                                 -->
                                 <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modaldatawali"><i class="mdi mdi-account"></i> Data Mahasiswa</button>
                            </div>
                            <!-- perwalian
                            <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group" role="group">
                                    <a type="button" class="btn btn-outline-secondary font-18" href="<?php echo base_url('Dosen/konseling/select_wali/'.$nidn) ?>"><i class="mdi mdi-account"></i> Perwalian Mahasiswa</a>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Mail list-->

                    <div class="table-responsive">
                        <div class="card-header bg-white"><h4 class="text-uppercase">Aktifitas Mahasiswa</h4></div>
                        <table id="table" class="table email-table no-wrap table-hover v-middle table">
                                <thead>
                                            <tr>
                                                <th width="5%"></th>
                                                <th width="10%"></th>
                                                <th width="10%"></th>
                                                <th width="60%"></th>
                                                <th width="15%"></th>
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

            <!-- Modal report wali -->
        <div class="modal fade" id="modaldatawali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Mahasiswa Wali</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Data Mahasiswa</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                    <?php foreach ($collegewali as $cw ) { ?>
                      <option><?php echo $cw->nim ?> | <?php echo $cw->name ?></option>
                    <?php } ?>
                    </select>
                </div>                
            </div>
          </div>
        </div>
    </div>

    <?php
        include(APPPATH.'views/dosen/page/modal_report.php'); 
        include(APPPATH.'views/report/js_report.php'); 
        include(APPPATH.'views/dosen/script/js_perwalian.php');  
    ?>