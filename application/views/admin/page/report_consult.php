
    <div class="page-wrapper"> 
        <div class="page-breadcrumb">
            <div class="col-5 align-self-center">
                <h4 class="page-title"><?php echo $page ?></h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Konseling</li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)" onclick="window.history.go(-1); return false;">Aktifitas Konseling</a></li>
                            <li class="breadcrumb-item"><a href=""><?php echo $page ?></a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid">
                  <div class="card-columns widget-app-columns">
                    <?php foreach ($report_consult as $user) :
                        $date = date('d M H:i A',strtotime($user->date));
                        ?>
                  <!-- column -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title pb-3">Info Mahasiswa</h4>
                                <div class="d-flex flex-row">
                                   <img src="<?php echo base_url().$user->photo ?>" width="100" height="100" class="rounded-circle" alt="user" />
                                    <div class="p-l-20">
                                        <h4 class="font-medium"><?php echo $user->name_college ?></h4>
                                            <small class="text-muted">NIM </small>
                                            <h6><?php echo $user->nim ?></h6> 
                                            <small class="text-muted p-t-30 db">Email Address</small>
                                            <h6><?php echo $user->email ?></h6>
                                            <small class="text-muted p-t-30 db">Phone</small>
                                            <h6><?php echo $user->no_telp ?></h6>
                                            <small class="text-muted p-t-30 db">Prodi</small>
                                            <h6><?php echo $user->prodi ?></h6>
                                            <small class="text-muted p-t-30 db">Jenis Kelamin</small>
                                            <h6><?php echo $user->gender ?></h6>
                                            <small class="text-muted p-t-30 db">Angkatan</small>
                                            <h6><?php echo $user->generation ?></h6>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    
                         <!-- column -->
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Detail Konsultasi</h4>
                                <div class="table-responsive m-t-40 m-b-40">
                                    <table class="table stylish-table">
                                        
                                        <tbody>
                                            <tr>
                                                <td><b>Nama Mahasiswa</td>
                                                <td><?php echo $user->name_college ?></td>
                                            </tr>
                                           <tr>
                                                <td><b>Nama Konselor</td>
                                                <td><?php echo $user->name_staff ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Tipe Konsultasi</td>
                                                <td><?php echo $user->selection ?></td>
                                            </tr>
                                           <tr>
                                                <td><b>Subject</td>
                                                <td><?php echo $user->title ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Tanggal Konsultasi</td>
                                                <td><?php echo $date ?></td>
                                            </tr>
                                             <tr class="card-body bg-light">
                                                <td><b>Status Konseling</td>
                                                <td><span class="label label-primary"><?php echo $user->status_consult ?></span></td>
                                            <tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end foreach detail report  -->
                        
                        <!-- ========================  -->
                  
                         <!-- column -->
                        <div class="card">
                            <div class="card-body">
                                <h5 >Rekap Chat</h5>
                                <a href="<?php echo base_url('Dosen/konseling/historychatpdf/').$user->id_consult ?>"  class="label label-primary text-white"><i class="fa fa-download"></i> Unduh</a>
                                <h5 class="m-t-30">Catatan Dari Konselor</h5>
                                 <a href="javascript:void(0)" onclick="showcatatan();"  class="label label-primary text-white"><i class="fa fa-file"> </i> Lihat Catatan</a>
                                <input type="hidden" id="inputcatatan" value="<?php echo $user->catatan ?>">
                                <br/>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- column -->
                        <div class="card">
                            <div class="card-body">
                               <h4 class="card-title">Berkas</h4>                             
                               <div class="comment-widgets scrollable" style="height:383px;">
                                <!-- Comment Row -->
                                <?php foreach ($file as $file) {
                                $datesend = date('d M H:i A',strtotime($file->datesend))
                                 ?>
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="comment-text w-100">
                                        <a  href="<?php echo base_url('Dosen/konseling/download_file/'.$file->id_file)?>" target="_blank" class="label label-rounded label-primary m-b-15 text-white"><?php echo $file->file; ?></a>
                                        <div class="comment-footer mt-3">
                                            <span class="text-muted float-right"><?php echo $datesend; ?></span> 
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            <?php } ?>
                                <!-- Comment Row -->
                            </div>
                        </div>
                    </div>
                <!-- column -->

                
            </div>
        </div>
    </div>

</div>
      <?php
        include(APPPATH.'views/admin/script/js_konseling.php');  
    ?>