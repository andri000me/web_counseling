
<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/assets/images/logo/stmik.png">
    <title><?php echo $title ?></title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?php echo base_url()?>assets/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="<?php echo base_url()?>assets/assets/images/logo/stmik.png" alt="logo" width="70"/></span>
                        <h5 class="mt-1 mb-3">HALAMAN LOGIN</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3" id="form-login">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" id="username">
                                    <div class="invalid-feedback  errorusername"></div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" id="password">
                                    <div class="invalid-feedback errorpassword"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 pb-3">
                                        <button class="btn btn-block btn-lg btn-info" id="btn-login" type="submit"><span id="text-login">Log in</span></button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
                                        <div class="social">
                                            <a href="<?php echo base_url('front/home')?>" class="btn  btn-facebook" data-toggle="tooltip" title="" data-original-title="Kembali Ke Halaman Awal"> <i aria-hidden="true" class="fa  fa-globe"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 

    //script login
    $(document).ready(function(){
        $('#form-login').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url : "<?php echo base_url('auth/proses_login')?>",
            data: $(this).serialize(),
            dataType: "json",
            beforeSend: function(){
                $('#btn-login').attr('disable','disabled');
                $('#btn-login').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            complete: function(){
                $('#btn-login').removeAttr('disable');
                $('#btn-login').html('Log in');
            },
             success: function (response){
                if(response.success){
                    window.location.href = "<?php echo base_url('auth/akses')?>";
                    
                }else if(response.error){
                    if (response.username) {
                        $('#username').addClass('is-invalid');
                         $('.errorusername').html(response.username);
                    }else{
                        $('#username').removeClass('is-invalid');
                         $('.errorusername').html('');
                    }
                    if (response.password) {
                        $('#password').addClass('is-invalid');
                         $('.errorpassword').html(response.password);
                    }else{
                        $('#password').removeClass('is-invalid');
                         $('.errorpassword').html('');
                    }
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
    });



    </script>
</body>

</html>