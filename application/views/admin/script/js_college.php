<script type="text/javascript">
    var table_college;
    $(document).ready(function() {
      //table
        $("#title-user").text("Data Mahasiswa");
        table_college = $('.table_college').DataTable({ 

            "processing": true, 
            "serverSide": true,
            "order": [], 
           
            "ajax": {
                "url": "<?php echo base_url('admin/user/list_user_college')?>",
                "type": "POST"
            },

            "columnDefs": [
            { 
                "targets": [ -1 ], 
                "orderable": false, 

            },
            ],

        });

           //modal import college
        $('#modal_import').click(function(){
            $('#formimport')[0].reset();
            $('.modalimport').modal('show'); // reset form on modals
            });

    });

    //import college

    Dropzone.autoDiscover = false;

    $("#formimport").dropzone({ 
        autoProcessQueue: false,
        url: "<?php echo base_url('excel/import/import_data_college')?>",
        method: "POST",
        maxFiles: 1,
        method:"post",
        paramName:"input_import",
        dictInvalidFileType:"Type file ini tidak dizinkan",
        acceptedFiles : ".xls,.xlsx",
        addRemoveLinks:true,
        
        init: function() {
        this.on("addedfile", function(event) {
            while (this.files.length > this.options.maxFiles) {
                this.removeFile(this.files[0]);
                }
            });
        this.on("processing", function (file) {
        });

        this.on("success", function (file, response) {
             swal.fire(
                        'Berhasil',
                        'Data Berhasil Diimport',
                        'success'
                      ).then((result) => 
                    {
                    reload_table_college();
                    $('.modalimport').modal('hide');
                     this.removeFile(file);
                     })
        });

        this.on("error", function (file, error, xhr) {
        });
         var myDropzone = this;

        // Update selector to match your button
        $("#btn_import").click(function (e) {
            e.preventDefault();
            myDropzone.processQueue();
        });


        }


    });

   
    //reload table
    function reload_table_college(e) {

        table_college.ajax.reload(null,false); 
         e.preventDefault();
    }


     //add user
     function add_college() {
        $('#form_add_user')[0].reset();
        $('input,select').removeClass('is-invalid is-valid');
        $('.modaladduser').modal('show'); // reset form on modals
    }


    $('#form_add_user').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url : "<?php echo base_url('admin/user/add_college')?>",
            data: $(this).serialize(),
            dataType: "json",
            beforeSend: function(){
                $('.btn_simpan_user').attr('disable','disabled');
                $('.btn_simpan_user').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            complete: function(){
                $('.btn_simpan_user').removeAttr('disable');
                $('.btn_simpan_user').html('<i class="ti-save"> </i> Simpan');
            },
            success: function (response){
                if(response.error){
                    if (response.name) {
                        $('#name').addClass('is-invalid');
                         $('.errorname').html(response.name);
                    }else{
                        $('#name').removeClass('is-invalid');
                        $('#name').addClass('is-valid');
                         $('.errorname').html('');
                    }
                    if (response.nim) {
                        $('#nim').addClass('is-invalid');
                         $('.errornim').html(response.nim);
                    }else{
                        $('#nim').removeClass('is-invalid');
                        $('#nim').addClass('is-valid');
                         $('.errornim').html('');
                    }
                    if (response.gender) {
                        $('#gender').addClass('is-invalid');
                         $('.errorgender').html(response.gender);
                    }else{
                        $('#gender').removeClass('is-invalid');
                        $('#gender').addClass('is-valid');
                         $('.errorgender').html('');
                    }
                   
                 
                } 
                else if(response.success){

                    swal.fire(
                        'Berhasil',
                        'Data User Telah Ditambahkan',
                        'success'
                      ).then((result) => 
                     {
                    $('#modaladduser').modal('hide');
                     reload_table_college();
                     
                     })


                }else{
                    
                    $('#nim').removeClass('is-invalid');
                        $('.errornim').html('');
                    $('#name').removeClass('is-invalid');
                         $('.errorname').html('');
                    $('#gender').removeClass('is-invalid');
                         $('.errorgender').html('');
                }

            },
           
        });
        return false;
    }); 

     //modal edit
    function edit_college(id)
    {
        $('#form_edit')[0].reset(); // reset form on modals
        $('input,select').removeClass('is-invalid is-valid');
        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo base_url('admin/user/get_college/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.id_college);
                $('[name="name"]').val(data.name);
                $('[name="nim"]').val(data.nim);
                $('[name="email"]').val(data.email);
                $('[name="gender"]').val(data.gender);
                $('[name="no_telp"]').val(data.no_telp);
                $('.modaledit').modal('show'); // show bootstrap modal when complete loaded

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

      //submit edit_user
    $('#form_edit').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url : "<?php echo base_url('admin/user/edit_college')?>",
            data: $(this).serialize(),
            dataType: "JSON",
            beforeSend: function(){
                $('.btn_edit').attr('disable','disabled');
                $('.btn_edit').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            complete: function(){
                $('.btn_edit').removeAttr('disable');
                $('.btn_edit').html('<i class="ti-save"> </i> Edit');
            },
            success: function (response){
                if(response.error){
                    if (response.name) {
                        $('#edit_name').addClass('is-invalid');
                         $('.errorname').html(response.name);
                    }else{
                        $('#edit_name').removeClass('is-invalid');
                        $('#edit_name').addClass('is-valid');
                         $('.errorname').html('');
                    }
                    if (response.nim) {
                        $('#edit_nim').addClass('is-invalid');
                         $('.errornim').html(response.nim);
                    }else{
                        $('#edit_nim').removeClass('is-invalid');
                        $('#edit_nim').addClass('is-valid');
                         $('.errornim').html('');
                    }
                 
                } 
                else if(response.success){

                    swal.fire(
                        'Berhasil',
                        'Data User Berhasil Di Edit',
                        'success'
                      ).then((result) => 
                     {
                    $('#modaledit').modal('hide');
                     reload_table_college();
                     
                     })


                }else{
                    
                    $('#edit_nim').removeClass('is-invalid');
                        $('.errornim').html('');
                    $('#edit_name').removeClass('is-invalid');
                         $('.errorname').html('');
                }

            },
           
        });
        return false;
    }); 


    //delete college
    function delete_college(nim){

        swal.fire({
                            title: 'Konfirmasi',
                            text: "Hapus Data Yang Dipilih?",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Hapus',
                            confirmButtonColor: '#FF0000',
                            cancelButtonText: 'Batal',
                          }).then((result) => {
                            if (result.value) {
                              $.ajax({
                                url : "<?php echo base_url('admin/user/delete_college')?>/"+nim,
                                type: "POST",
                                dataType: "JSON",
                                beforeSend :function () {
                                swal.fire({
                                    title: 'Menunggu',
                                    html: 'Memproses data',
                                    onOpen: () => {
                                      swal.showLoading()
                                    }
                                  })      
                                },  
                                data:{nim:nim}, 
                                success:function(data){
                      swal.fire(
                        'Berhasil',
                        'Data User Telah Terhapus',
                        'success'
                      ).then((result) => 
                    {
                     reload_table_college();
                     
                     })
                       }
                  })
              }
         })


    }
</script>