       <!-- Modal report consult -->
        <div class="modal fade" id="modalreport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rekap Konseling</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('Report/report/report_all')?>" method="POST" style="width: 100%" enctype="multipart/form-data">
                    <input type="hidden" name="nidn" id="nidn" value="<?php echo $this->session->userdata('no_unique')?>">
                    <div class="form-group row" id="report_date_college" >
                        <div class="col-md-6">
                          <label >Dari Tanggal</label>
                          <input type="date" value="<?php echo date('Y-m-d') ?>" class="form-control " name="date_start" >
                        </div>
                        <div class="col-md-6">
                          <label >Sampai Tanggal</label>
                          <input type="date" value="<?php echo date('Y-m-d') ?>" class="form-control" name="date_end">
                        </div>
                      </div>
                    <div class="form-group">
                        <label class="col-md-12">Pilihan Rekap</label>
                            <div class="col-md-12">
                                <select class="form-control form-control-line" name="pilih_rekap" id="pilih_rekap" required>
                                    <option value="" disabled selected>Pilihan Rekap</option>
                                    <option value="1">Permahasiswa</option>
                                    <option value="2">Semua Mahasiswa</option>
                                </select>
                            </div>
                        </div>
                    <div class="form-group" id="group_college" style="display: none">
                        <label class="col-md-12">Pilih Mahasiswa</label>
                            <div class="col-md-12">
                                <select class="form-control form-control-line" name="pilih_college" id="pilih_college" required >
                                    <option value=""  disabled selected>Pilih Mahasiswa</option>
                                </select>
                            </div>
                        </div>
                     
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Buat Rekap</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>


           <!-- Modal report wali -->
        <div class="modal fade" id="modalreportwali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rekap Konseling Wali</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('Report/report/report_all_wali')?>" method="POST" style="width: 100%" enctype="multipart/form-data">
                    <input type="text" name="nidn_wali" id="nidn_wali" value="<?php echo $this->session->userdata('no_unique')?>">
                    <div class="form-group">
                        <label class="col-md-12">Pilihan Rekap</label>
                            <div class="col-md-12">
                                <select class="form-control form-control-line" name="pilih_rekap_wali" id="pilih_rekap_wali" required>
                                    <option value="" disabled selected>Pilihan Rekap</option>
                                    <option value="1">Permahasiswa</option>
                                    <option value="2">Semua Mahasiswa</option>
                                </select>
                            </div>
                        </div>
                    <div class="form-group" id="group_college_wali" style="display: none">
                        <label class="col-md-12">Pilih Mahasiswa Wali</label>
                            <div class="col-md-12">
                                <select class="form-control form-control-line" name="pilih_college_wali" id="pilih_college_wali" required >
                                    <option value=""  disabled selected>Pilih Mahasiswa Wali</option>
                                </select>
                            </div>
                        </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Buat Rekap</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>