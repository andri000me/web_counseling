<script type="text/javascript">

	$(document).ready(function(){

		//match password
        $("#confirmpassword").keyup(function(){
             if ($("#password").val() != $("#confirmpassword").val()) {
                 $("#errorconfirmpassword").html("Password tidak sama").css("color","red");
                 document.getElementById("btn_change_auth").disabled = true;
             }else{
             	document.getElementById("btn_change_auth").disabled = false;
                 $("#errorconfirmpassword").html("");
            }
      });
	});


	//change profile
    $('#form_change_profile').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url : "<?php echo base_url('profile/profile/change_profile_college')?>",
            data: $(this).serialize(),
            dataType: "JSON",
            beforeSend: function(){
                $('.btn_change_profile').attr('disable','disabled');
                $('.btn_change_profile').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            complete: function(){
                $('.btn_change_profile').removeAttr('disable');
                $('.btn_change_profile').html('Update Profile');
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
                    if (response.email) {
                        $('#email').addClass('is-invalid');
                         $('.erroremail').html(response.email);
                    }else{
                        $('#email').removeClass('is-invalid');
                        $('#email').addClass('is-valid');
                         $('.erroremail').html('');
                    }
                    if (response.no_telp) {
                        $('#no_telp').addClass('is-invalid');
                         $('.errorno_telp').html(response.no_telp);
                    }else{
                        $('#no_telp').removeClass('is-invalid');
                        $('#no_telp').addClass('is-valid');
                         $('.errorno_telp').html('');
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
                        'Data User Berhasil Di Update',
                        'success'
                      ).then((result) => 
                     {
                     	location.reload();
                     
                     })


                }else{
                    
                    $('#name').removeClass('is-invalid');
                        $('.errorname').html('');
                    $('#email').removeClass('is-invalid');
                         $('.email').html('');
                    $('#no_telp').removeClass('is-invalid');
                         $('.no_telp').html('');
                    $('#gender').removeClass('is-invalid');
                         $('.gender').html('');
                }

            },
           
        });
        return false;
    }); 


    //change password
    $('#form_change_auth').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url : "<?php echo base_url('profile/profile/change_auth')?>",
            data: $(this).serialize(),
            dataType: "JSON",
            beforeSend: function(){
                $('.btn_change_auth').attr('disable','disabled');
                $('.btn_change_auth').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            complete: function(){
                $('.btn_change_auth').removeAttr('disable');
                $('.btn_change_auth').html('Update Profile');
            },
            success: function (response){
                if(response.error){
                    if (response.username) {
                        $('#username').addClass('is-invalid');
                         $('.errorusername').html(response.username);
                    }else{
                        $('#username').removeClass('is-invalid');
                        $('#username').addClass('is-valid');
                         $('.errorusername').html('');
                    }
                    if (response.password) {
                        $('#password').addClass('is-invalid');
                         $('.errorpassword').html(response.password);
                    }else{
                        $('#password').removeClass('is-invalid');
                        $('#password').addClass('is-valid');
                         $('.errorpassword').html('');
                    }
                   
                 
                } 
                else if(response.success){

                    swal.fire(
                        'Berhasil',
                        'Data User Berhasil Di Update',
                        'success'
                      ).then((result) => 
                     {
                     	location.reload();
                     
                     })


                }else{
                    
                    $('#username').removeClass('is-invalid');
                        $('.errorusername').html('');
                    $('#password').removeClass('is-invalid');
                         $('.errorpassword').html('');
                }

            },
           
        });
        return false;
    }); 

	//change photo


	 Dropzone.autoDiscover = false;

    $("#form_photo").dropzone({ 
        autoProcessQueue: false,
        url: "<?php echo base_url('profile/profile/change_photo_college')?>",
        method: "POST",
        maxFiles: 1,
        method:"post",
        paramName:"input_photo",
        dictInvalidFileType:"Type file ini tidak dizinkan",
        acceptedFiles : ".png,.jpeg,.jpg",
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
                        'Foto Berhasil Di Ubah',
                        'success'
                      ).then((result) => 
                    {
                     this.removeFile(file);
                     location.reload();
                     })
        });

        this.on("error", function (file, error, xhr) {
        });
         var myDropzone = this;

        // Update selector to match your button
        $("#btn_photo").click(function (e) {
            e.preventDefault();
            myDropzone.processQueue();
        });


        }


    });
</script>