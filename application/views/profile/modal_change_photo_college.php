<!-- modal import -->
            <div class="modal fade" id="modal_change_photo" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel"><i class="ti-pencil mr-2"></i>Ubah Foto Profil</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="col-md-12">
                                        <div class="card card-body">
                                            <form action="<?php echo base_url('Profile/profile/change_foto')?>" class="dropzone" id="form_photo" style="width: 100%" enctype="multipart/form-data" method="post">
                                                <div class="fallback">
                                                    <input name="input_photo" id="input_photo" type="file" />
                                                </div>
                                               
                                            </form>
                                            <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success col-md-12" id="btn_photo" ><i class="ti-import"></i> Ubah</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>