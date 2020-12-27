 <div class="page-wrapper">
    <div class=" mail-compose bg-white" >
        <div class="p-3 border-bottom">
            <div class="d-flex align-items-center">
                <div>
                    <h4><?php echo $page ?></h4>
                    <small>Konseling<i class="mdi mdi-chevron-right"></i><a href="<?php echo base_url('College/Konseling')?>">Aktifitas Konseling</a><i class="mdi mdi-chevron-right"></i><a href="">Form Pengajuan Konseling</a></small>
                </div>
            </div>
        </div>
    <div class="bg-light p-3 d-flex align-items-center do-block">
        <button type="button" id="kembali" onclick="window.history.back();" class="btn btn-outline-secondary font-18 mr-2"><i class="mdi mdi-arrow-left"></i></button>
        <div class="ml-auto">
            <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                <button type="button" class="btn btn-outline-secondary font-18" id="btn-pengajuan"><i class="mdi mdi-content-save-all"></i> Ajukan</button>   <button type="button" onclick="location.reload();" class="btn btn-outline-secondary font-18"><i class="mdi mdi-reload"></i> Reset</button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form class="form-horizontal r-separator" id="form-pengajuan">
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <hr class="mt-0">
                                <?php foreach ($college as $data) { ?>
                                    <input type="hidden" name="nim"  id="nim" value="<?php echo $data->nim ?>">
                                <?php } ?>
                                <div class="card-body">
                                    <div class="form-group row pb-3">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Tipe Konsultasi</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" id="consult_selection" name="consult_selection">
                                                <option selected disabled>Pilih Tipe Konsultasi</option>
                                                 <?php foreach ($selection as $row){ ?>
                                                 <option value="<?php echo $row->kode_selection;?>"><?php echo $row->selection;?></option>
                                                 <?php };?>
                                            </select>
                                            <div class="invalid-feedback  errorconsult_selection"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row pb-3">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Konselor</label>
                                        <div class="col-sm-5">
                                             <select class="form-control" id="konselor" name="konselor">
                                                <option selected disabled>Pilih Konselor</option>
                                            </select>
                                            <div class="invalid-feedback  errorkonselor"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row pb-3">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Subject</label>
                                        <div class="col-sm-5">
                                           <textarea class="form-control" name="title" id="title" placeholder="Tulis Subject"></textarea>
                                           <div class="invalid-feedback  errortitle"></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                        </div>
                    </div>
                </div>
        </form>
        <!-- Action part -->
    </div>
</div>
</div>


   <?php
        include(APPPATH.'views/college/script/js_konseling.php');  
    ?>