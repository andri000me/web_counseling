
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
                    <?php foreach ($detail_consult as $user) :
                        $date = date('d M H:i A',strtotime($user->date));
                        $prodi_staff = $user->id_prodi_staff;
                        $prodi_college = $user->id_prodi_college;
                        if($prodi_staff == '12'){
                            $prodi_staff = 'Teknik Informatika';
                        }else{
                            $prodi_staff = 'Sistem Informasi';
                        }
                        if($prodi_college == '12'){
                            $prodi_college = 'Teknik Informatika';
                        }else{
                            $prodi_college = 'Sistem Informasi';
                        }
                        ?>
                  <!-- column -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title pb-3">Info Mahasiswa</h4>
                                <div class="d-flex flex-row">
                                   <img src="<?php echo base_url().$user->photo_college ?>" width="100" height="100" class="rounded-circle" alt="user" />
                                    <div class="p-l-20">
                                        <h4 class="font-medium"><?php echo $user->name_college ?></h4>
                                            <small class="text-muted">NIM </small>
                                            <h6><?php echo $user->nim ?></h6> 
                                            <small class="text-muted p-t-30 db">Email Address</small>
                                            <h6><?php echo $user->email_college ?></h6>
                                            <small class="text-muted p-t-30 db">Phone</small>
                                            <h6><?php echo $user->no_telp_college ?></h6>
                                            <small class="text-muted p-t-30 db">Prodi</small>
                                            <h6><?php echo $prodi_college ?></h6>
                                            <small class="text-muted p-t-30 db">Jenis Kelamin</small>
                                            <h6><?php echo $user->gender_college ?></h6>
                                            <small class="text-muted p-t-30 db">Angkatan</small>
                                            <h6><?php echo $user->generation ?></h6>
                                    </div> 
                                </div>
                            </div>
                        </div>
                         <!-- column -->
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title pb-3">Info Konselor</h4>
                                <div class="d-flex flex-row">
                                   <img src="<?php echo base_url().$user->photo_staff ?>" width="100" height="100" class="rounded-circle" alt="user" />
                                    <div class="p-l-20">
                                        <h4 class="font-medium"><?php echo $user->name_staff ?></h4>
                                            <small class="text-muted">NIDN </small>
                                            <h6><?php echo $user->nidn ?></h6> 
                                            <small class="text-muted p-t-30 db">Email Address</small>
                                            <h6><?php echo $user->email_staff ?></h6>
                                            <small class="text-muted p-t-30 db">Phone</small>
                                            <h6><?php echo $user->no_telp_staff ?></h6>
                                            <small class="text-muted p-t-30 db">Prodi</small>
                                            <h6><?php echo $prodi_staff ?></h6>
                                            <small class="text-muted p-t-30 db">Jenis Kelamin</small>
                                            <h6><?php echo $user->gender_staff ?></h6>
                                            <small class="text-muted p-t-30 db">Kedududukan</small>
                                            <h6><?php echo $user->role ?></h6>
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
                        <!-- end foreach detail   -->
                        <?php endforeach; ?>
                
            </div>
        </div>
    </div>

</div>
      <?php
        include(APPPATH.'views/admin/script/js_konseling.php');  
    ?>