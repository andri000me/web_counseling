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
                                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="search_ketua">
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Mail list-->

                    <div class="table-responsive">
                        <table id="table_ketua" class="table email-table no-wrap table-hover v-middle table_ketua">
                                <thead>
                                            <tr>
                                                <th width="5%"></th>
                                                <th >Mahasiswa</th>
                                                <th >Konselor</th>
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
        include(APPPATH.'views/dosen/script/js_konseling.php');  
    ?>