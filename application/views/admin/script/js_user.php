<script type="text/javascript">
    var table_user;
    var sumbit_method;
    $(document).ready(function() {
      //table
        $("#title-user").text("Data User");
        table_user = $('.table_user').DataTable({ 

            "processing": true, 
            "serverSide": true,
            "order": [], 
           
            "ajax": {
                "url": "<?php echo base_url('admin/user/list_user')?>",
                "type": "POST"
            },

            "columnDefs": [
            { 
                "targets": [ -1 ], 
                "orderable": false, 

            },
            ],

        });

           //import user
        $('#modal_import_user').click(function(){
            $('#formimportuser')[0].reset();
            $('.modalimportuser').modal('show'); // reset form on modals
            });

    });

    //import user

    Dropzone.autoDiscover = false;

    $("#formimportuser").dropzone({ 
        autoProcessQueue: false,
        url: "<?php echo base_url('excel/import/import_data_user')?>",
        method: "POST",
        maxFiles: 1,
        method:"post",
        paramName:"input_import_user",
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
                    reload_table_user();
                    $('.modalimportuser').modal('hide');
                     this.removeFile(file);
                     })
        });

        this.on("error", function (file, error, xhr) {
        });
         var myDropzone = this;

        // Update selector to match your button
        $("#btn_import_user").click(function (e) {
            e.preventDefault();
            myDropzone.processQueue();
        });


        }


    });
    //reload table
    function reload_table_user(e) {

        table_user.ajax.reload(null,false); 
         e.preventDefault();
    }
   
    //add user
     function add_user() {
        $('#form_add_user')[0].reset();
        $('input,select').removeClass('is-invalid is-valid');
        $('.modaladduser').modal('show'); // reset form on modals
    }

     //get identity
    $("#role").change(function(){

            // variabel dari nilai combo box role
            var id_role = $("#role").val();
            if (id_role != 'DSN'){
                 var prod = document.getElementById('prod');
                 prod.style.display = 'none';
            }else{
                 $.ajax({
                url : "<?php echo base_url('admin/user/get_prodi');?>",
                method : "POST",
                data : {id_role:id_role},
                async : false,
                dataType : "JSON",
                success: function(data){
                    var html = '';
                    var i;
                    $('.prod').removeAttr('style');
                     html += '<option selected disabled>Pilih Prodi</option>';
                    for(i=0; i<data.length; i++){
                                  html += '<option value='+data[i].id+'>'+data[i].prodi+'</option>';
                    }
                    $('#prodi').html(html);

                }
            });
                          
            }
        });
    

    $('#form_add_user').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url : "<?php echo base_url('admin/user/add_user')?>",
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
             error: function (xhr, statusText, err) {
                alert("error"+xhr.status);
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
                    if (response.nidn) {
                        $('#nidn').addClass('is-invalid');
                         $('.errornidn').html(response.nidn);
                    }else{
                        $('#nidn').removeClass('is-invalid');
                        $('#nidn').addClass('is-valid');
                         $('.errornidn').html('');
                    }
                    if (response.email) {
                        $('#email').addClass('is-invalid');
                         $('.erroremail').html(response.email);
                    }else{
                        $('#email').removeClass('is-invalid');
                        $('#email').addClass('is-valid');
                         $('.erroremail').html('');
                    }
                    if (response.gender) {
                        $('#gender').addClass('is-invalid');
                         $('.errorgender').html(response.gender);
                    }else{
                        $('#gender').removeClass('is-invalid');
                        $('#gender').addClass('is-valid');
                         $('.errorgender').html('');
                    }
                    if (response.role) {
                        $('#role').addClass('is-invalid');
                         $('.errorrole').html(response.role);
                    }else{
                        $('#role').removeClass('is-invalid');
                        $('#role').addClass('is-valid');
                         $('.errorrole').html('');
                    }
                    if (response.no_telp) {
                        $('#no_telp').addClass('is-invalid');
                         $('.errorno_telp').html(response.no_telp);
                    }else{
                        $('#no_telp').removeClass('is-invalid');
                        $('#no_telp').addClass('is-valid');
                         $('.errorno_telp').html('');
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
                     reload_table_user();
                     
                     })


                }else{
                    
                    $('#nidn').removeClass('is-invalid');
                        $('.errornidn').html('');
                    $('#name').removeClass('is-invalid');
                         $('.errorname').html('');
                    $('#email').removeClass('is-invalid');
                        $('.erroremail').html('');
                    $('#gender').removeClass('is-invalid');
                         $('.errorgender').html('');
                    $('#role').removeClass('is-invalid');
                        $('.errorrole').html('');
                    $('#no_telp').removeClass('is-invalid');
                        $('.errorno_telp').html('');
                }

            },
           
        });
        return false;
    }); 
    
     //modal edit
    function edit_user(id)
    {
        $('#form_edit_user')[0].reset(); // reset form on modals
        $('input,select').removeClass('is-invalid is-valid');
        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo base_url('admin/user/get_user/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {   
                $('[name="id"]').val(data.id_users);
                $('[name="name"]').val(data.name);
                $('[name="nidn"]').val(data.nidn);
                $('[name="email"]').val(data.email);
                $('[name="gender"]').val(data.gender);
                $('[name="role"]').val(data.kode_role);
                $('[name="prodi"]').val(data.id_prodi);
                $('[name="no_telp"]').val(data.no_telp);
                $('.modaledituser').modal('show'); // show bootstrap modal when complete loaded

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }


    //submit edit_user
    $('#form_edit_user').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url : "<?php echo base_url('admin/user/edit_user')?>",
            data: $(this).serialize(),
            dataType: "JSON",
            beforeSend: function(){
                $('.btn_edit_user').attr('disable','disabled');
                $('.btn_edit_user').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            complete: function(){
                $('.btn_edit_user').removeAttr('disable');
                $('.btn_edit_user').html('<i class="ti-save"> </i> Edit');
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
                    if (response.nidn) {
                        $('#edit_nidn').addClass('is-invalid');
                         $('.errornidn').html(response.nidn);
                    }else{
                        $('#edit_nidn').removeClass('is-invalid');
                        $('#edit_nidn').addClass('is-valid');
                         $('.errornidn').html('');
                    }
                    if (response.email) {
                        $('#edit_email').addClass('is-invalid');
                         $('.erroremail').html(response.email);
                    }else{
                        $('#edit_email').removeClass('is-invalid');
                        $('#edit_email').addClass('is-valid');
                         $('.erroremail').html('');
                    }
                    if (response.gender) {
                        $('#edit_gender').addClass('is-invalid');
                         $('.errorgender').html(response.gender);
                    }else{
                        $('#edit_gender').removeClass('is-invalid');
                        $('#edit_gender').addClass('is-valid');
                         $('.errorgender').html('');
                    }
                    if (response.role) {
                        $('#edit_role').addClass('is-invalid');
                         $('.errorrole').html(response.role);
                    }else{
                        $('#edit_role').removeClass('is-invalid');
                        $('#edit_role').addClass('is-valid');
                         $('.errorrole').html('');
                    }
                    if (response.prodi) {
                        $('#edit_prodi').addClass('is-invalid');
                         $('.errorprodi').html(response.prodi);
                    }else{
                        $('#edit_prodi').removeClass('is-invalid');
                        $('#edit_prodi').addClass('is-valid');
                         $('.errorprodi').html('');
                    }
                    if (response.no_telp) {
                        $('#edit_no_telp').addClass('is-invalid');
                         $('.errorno_telp').html(response.no_telp);
                    }else{
                        $('#edit_no_telp').removeClass('is-invalid');
                        $('#edit_no_telp').addClass('is-valid');
                         $('.errorno_telp').html('');
                    }
                 
                } 
                else if(response.success){

                    swal.fire(
                        'Berhasil',
                        'Data User Berhasil Di Edit',
                        'success'
                      ).then((result) => 
                     {
                    $('#modaledituser').modal('hide');
                     reload_table_user();
                     
                     })


                }else{
                    
                    $('#edit_nidn').removeClass('is-invalid');
                        $('.errornidn').html('');
                    $('#edit_name').removeClass('is-invalid');
                         $('.errorname').html('');
                    $('#edit_email').removeClass('is-invalid');
                        $('.erroremail').html('');
                    $('#edit_gender').removeClass('is-invalid');
                         $('.errorgender').html('');
                    $('#edit_role').removeClass('is-invalid');
                        $('.errorrole').html('');
                    $('#edit_prodi').removeClass('is-invalid');
                         $('.errorprodi').html('');
                    $('#edit_no_telp').removeClass('is-invalid');
                        $('.errorno_telp').html('');
                }

            },
           
        });
        return false;
    }); 




    //delete user
    function delete_user(nidn){

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
                                url : "<?php echo base_url('admin/user/delete_user')?>/"+nidn,
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
                                data:{nidn:nidn}, 
                                success:function(data){
                      swal.fire(
                        'Berhasil',
                        'Data User Telah Terhapus',
                        'success'
                      ).then((result) => 
                    {
                     reload_table_user();
                     
                     })
                       }
                  })
              }
         })


    }

</script>