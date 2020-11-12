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
                     <div class="p-3 b-b">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4><?php echo $page ?></h4>
                                <small>Ekstra<i class="mdi mdi-chevron-right"></i><a href="">Artikel</a><span id="page"></span></small>
                            </div>
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Button group part -->
                    <div class="bg-light p-15 d-flex align-items-center do-block">
                        <div class="btn-group mt-1 mb-1">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input sl-all" id="cstall">
                                <label class="custom-control-label" for="cstall">Check All</label>
                            </div>
                        </div>
                        <div class="btn-group mt-1 mb-1 col-md-6">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-search"></i></span>
                                  </div>
                                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="search_article">
                        </div>
                         <div class="ml-auto">
                            <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-outline-secondary font-18" onclick="location.reload();"><i class="mdi mdi-reload"></i></button>
                                <button type="button" class="btn btn-outline-secondary font-18 delete_article" id="delete_article"><i class="mdi mdi-delete"></i></button>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                                <a  class="btn btn-danger pt-2 font-16" href="<?php echo base_url('article/article/new_article')?>">Artikel Baru</a>
                            </div>
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Mail list-->
                    <div class="table-responsive">
                        <table id="table_article" class="table email-table no-wrap table-hover v-middle table_article">
                                <thead>
                                            <tr>
                                                <th width="5%"></th>
                                                <th ></th>
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
