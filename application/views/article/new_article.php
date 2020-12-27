 <!-- Page wrapper  -->
        <!-- ============================================================== -->
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
               
                <div class="mail-list bg-white">
                    <div class="page-breadcrumb">
                        <div class="col-5 align-self-center">
                            <h4 class="page-title"><?php echo $page ?></h4>
                            <div class="d-flex align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Ekstra</li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0)" onclick="window.history.go(-1); return false;">Artikel</a></li>
                                        <li class="breadcrumb-item"><a href=""><?php echo $page ?></a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
        </div>
                    <!-- Action part -->

                <!-- ============================================================== -->
                <!-- Right Part  Mail Compose -->
                <!-- ============================================================== -->
                <div class="mail-compose bg-white" >
                    <div class="card-body bg-light">
                        <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-outline-secondary font-18" onclick="window.history.go(-1); return false;"><i class="mdi mdi-arrow-left"></i></button>
                            <button type="button" class="btn btn-outline-secondary font-18" onclick="location.reload()"><i class="mdi mdi-reload"></i></button>
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Button group part -->
                    <div class="card-body ">
                        <form id="form_article" >
                            <div class="form-group">
                                <input type="hidden" id="author" name="author" value="<?php echo $this->session->userdata('no_unique'); ?>" class="form-control col-md-5" placeholder="Author" readonly>
                            </div>

                            <h5>Thumbnail</h5>
                            <div class="form-group col-md-7">
                              <input type="file" class="custom-file-input " id="file" name="file">
                              <label class="custom-file-label form-control " for="customFile">Choose file</label>
                               <div class="invalid-feedback d-block errorfile "></div>
                            </div>
                            <h5>Judul</h5>
                            <div class="form-group">
                                <input type="text" id="title" name="title" class="form-control" placeholder="Judul">
                                <div class="invalid-feedback errortitle"></div>
                            </div>
                            <h5>Konten</h5>
                            <div class="form-group">
                            <textarea id="content" name="content"></textarea>
                             <div class="invalid-feedback d-block errorcontent"></div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mt-3 mr-1" id="submit_article"><i class="mdi mdi-send"></i> Posting</button>
                            </div>
                        </form>
                        <!-- Action part -->
                    </div>
                </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
           
        <?php
        include(APPPATH.'views/article/js_article.php');  
        ?>
