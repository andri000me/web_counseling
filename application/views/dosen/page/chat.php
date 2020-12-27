
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <?php echo $this->session->flashdata('alertupload') ?>
                  <div class="row">
                    <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class=" p-15 d-flex align-items-center do-block pb-1">

                                        <h4 class="card-title">Chat Pesan</h4> 

                                         <div class="ml-auto">
                                            <div class="btn-group m-r-10" role="group" aria-label="Button group with nested dropdown">
                                                 <a href="<?php echo base_url('Dosen/konseling')?>" class="btn btn-outline-secondary " ><i class="mdi mdi-arrow-left-bold"></i></a>
                                                <button type="button" class="btn btn-outline-secondary " onclick="location.reload();"><i class="mdi mdi-reload"></i></button>
                                            </div>
                                            <div class="btn-group m-r-10" role="group" aria-label="Button group with nested dropdown">
                                                <div class="btn-group" role="group">
                                                    <div class="btn-group m-r-10" role="group" aria-label="Button group with nested dropdown">
                                                        <button type="button" class="btn btn-outline-secondary " id="finishconsult"><i class="mdi mdi-check"></i> Akhiri Konsultasi</button>

                                                    </div>
                                                </div>
                                            </div>        
                                        </div>
                                    </div>

                                    <div class="chat-box scrollable" id="content" style="height:300px;">

                                    <div id="dumppy"></div>

                                </div>
                            </div>
                            <div class="card-body border-top">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="input-field mt-0 mb-0">
                                            <input id="message" name="message" placeholder="Type and enter" class="form-control border-0 message" type="text">
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <a class="btn-circle btn-lg btn-cyan float-right text-white pl-3 ml-1 btnSend" id="nav_down" href="javascript:void(0)"><i class="fas fa-paper-plane"></i></a>

                                        <form method="POST" action="<?php echo base_url('Dosen/konseling/upload_file')?>" enctype="multipart/form-data"  id="formupload">
                                            <?php foreach ($id_consult as $row ) { ?>
                                                <input type="hidden" value="<?php echo $row->id ?>" name="id_consult" id="id_consult">
                                                <input type="hidden" value="<?php echo $row->nidn ?>" name="id_user" id="id_user">
                                            <?php } ?>
                                            <a href="#" class=" btn-circle btn-lg btn-dark float-right text-white pl-3 ml-1" id="divfile">
                                            <i class="fa fa-upload"></i></a>
                                            <input type="file" name="file" class="inputfile"  id="inputfile" style="display: none">
                                            <button type="submit" id="btnupload" style="display: none"></button>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                 <!-- column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                               <h4 class="card-title">Berkas</h4>                             
                               <div class="comment-widgets scrollable" style="height:383px;">
                                <!-- Comment Row -->
                                <?php foreach ($file as $file) {
                                $sender = $this->session->userdata('no_unique');
                                $id_user = $file->id_user;
                                if($sender == $id_user){
                                    $name = $file->name_staff;
                                    $photo = base_url().$file->photo_staff;
                                }else{
                                    $name = $file->name_college;
                                    $photo = base_url().$file->photo_college;
                                }
                                $datesend = date('d M H:i A',strtotime($file->datesend))
                                 ?>
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="<?php echo $photo ?>" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium mb-3"> <?php echo $name ?> </h6>
                                        <a  href="<?php echo base_url('Dosen/konseling/download_file/'.$file->id_file)?>" target="_blank" class="label label-rounded label-primary m-b-15 text-white"><?php echo $file->file; ?></a>
                                        <div class="comment-footer mt-3">
                                            <span class="text-muted float-right"><?php echo $datesend; ?></span> 
                                                    <a href="javascript:void(0)" id="<?php echo $file->id_file ?>" class="text-muted deletefile"><i class="ti-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                                 <hr>
                            <?php } ?>
                                <!-- Comment Row -->
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>

</div>
      <?php
        include(APPPATH.'views/dosen/script/js_chat.php');  
    ?>