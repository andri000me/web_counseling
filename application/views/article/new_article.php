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
                                <button type="button" class="btn btn-secondary mt-3"><i class="mdi mdi-content-save"></i> Draft</button>
                            </div>
                        </form>
                        <!-- Action part -->
                    </div>
                </div>
                </div>
                <!-- ============================================================== -->
                <!-- Right Part  Mail detail -->
                <!-- ============================================================== -->
                <div class="right-part mail-details bg-white" style="display: none;">
                    <div class="card-body bg-light">
                        <button type="button" id="back_to_inbox" class="btn btn-outline-secondary font-18 mr-2"><i class="mdi mdi-arrow-left"></i></button>
                        <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-reply"></i></button>
                            <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-alert-octagon"></i></button>
                            <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-delete"></i></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-folder font-18 "></i> </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-label font-18"></i> </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-bottom">
                        <h4 class="mb-0">Your Message title goes here</h4>
                    </div>
                    <div class="card-body border-bottom">
                        <div class="d-flex no-block align-items-center mb-5">
                            <div class="mr-2"><img src="<?php echo base_url()?>assets/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="45"></div>
                            <div class="">
                                <h5 class="mb-0 font-16 font-medium">Hanna Gover <small> ( hgover@gmail.com )</small></h5><span>to Suniljoshi19@gmail.com</span>
                            </div>
                        </div>
                        <h4 class="mb-3">Hey Hi,</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                    </div>
                    <div class="card-body">
                        <h4><i class="fa fa-paperclip mr-2 mb-2"></i> Attachments <span>(3)</span></h4>
                        <div class="row">
                            <div class="col-md-2">
                                <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="<?php echo base_url()?>assets/assets/images/big/img1.jpg"> </a>
                            </div>
                            <div class="col-md-2">
                                <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="<?php echo base_url()?>assets/assets/images/big/img2.jpg"> </a>
                            </div>
                            <div class="col-md-2">
                                <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="<?php echo base_url()?>assets/assets/images/big/img3.jpg"> </a>
                            </div>
                        </div>
                        <div class="border mt-3 p-15">
                            <p class="pb-3">click here to <a href="javascript:void(0)">Reply</a> or <a href="javascript:void(0)">Forward</a></p>
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
