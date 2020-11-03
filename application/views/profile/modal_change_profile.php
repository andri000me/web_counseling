<!-- modal import -->
            <div class="modal fade" id="modal_change_profile" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel"><i class="ti-pencil mr-2"></i>Edit Profil</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="col-md-12">
                                        <div class="card card-body">
                                            <form id="form_change_profile" style="width: 100%" enctype="multipart/form-data">
                                                <?php foreach ($users_staff as $row) { ?>
                                                <div class="form-group">
                                                <label class="col-md-12">Nama Lengkap</label>
                                                    <div class="col-md-12">
                                                        <input type="text" value="<?php echo $row->name ?>" id="name" name="name" placeholder="Masukan Nama" class="form-control form-control-line">
                                                    <div class="invalid-feedback  errorname"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-12">Email</label>
                                                    <div class="col-md-12">
                                                        <input type="text" value="<?php echo $row->email ?>" id="email" name="email" placeholder="Masukan email" class="form-control form-control-line">
                                                    <div class="invalid-feedback  erroremail"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-12">No Telepon</label>
                                                    <div class="col-md-12">
                                                        <input type="text" value="<?php echo $row->no_telp ?>" id="no_telp" name="no_telp" placeholder="Masukan No Telepon" class="form-control form-control-line">
                                                    <div class="invalid-feedback  errorno_telp"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-12">Jenis Kelamin</label>
                                                    <div class="col-md-12">
                                                        <select class="form-control form-control-line" name="gender" id="gender">
                                                            <option value="<?php echo $row->gender ?>" selected><?php echo $row->gender ?></option>
                                                            <option value="Laki-Laki">Laki-Laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    <div class="invalid-feedback  errorgender"></div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success col-md-12" id="btn_change_profile" ><i class="ti-save"></i> Update Profile</button>
                                                </div>
                                                <?php } ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>