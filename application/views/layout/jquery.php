 <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/app.init.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url()?>assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>assets/dist/js/custom.min.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/pages/dashboards/dashboard7.js"></script>

     <!--datatables -->
    <script src="<?php echo base_url()?>assets/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/pages/datatable/datatable-basic.init.js"></script>
      <!--sweetalert -->
      <script src="<?php echo base_url()?>assets/assets/libs/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets/libs/sweetalert2/sweet-alert.init.js"></script>
    <!--konseling-->
    <script src="<?php echo base_url()?>assets/dist/js/pages/email/email.js"></script>
    <script src="<?php echo base_url()?>assets/assets/libs/summernote/dist/summernote-bs4.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <!-- toast.js -->
    <script src="<?php echo base_url()?>assets/assets/libs/toastr/build/toastr.min.js"></script>
    <script src="<?php echo base_url()?>assets/assets/extra-libs/toastr/toastr-init.js"></script>
    <!-- dual list box -->
    <script src="<?php echo base_url()?>assets/assets/libs/bootstrap-duallistbox/dist/jquery.bootstrap-duallistbox.min.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/pages/forms/dual-listbox/dual-listbox.js"></script>
<script type="text/javascript">
  //number only
  function numeric(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

    $('#summernote').summernote({
        placeholder: 'Type your email Here',
        tabsize: 2,
        height: 250
    });
    $("#dzid").dropzone({ url: "/file/post" });


   
</script>


  <script>
     $(function() {
        "use strict";
        $("#main-wrapper").AdminSettings({
            Theme: false, // this can be true or false ( true means dark and false means light ),
            Layout: 'vertical',
            LogoBg: 'skin6', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6 
            NavbarBg: 'skin1', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
            SidebarType: 'full', // You can change it full / mini-sidebar / iconbar / overlay
            SidebarColor: 'skin6', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
            SidebarPosition: true, // it can be true / false ( true means Fixed and false means absolute )
            HeaderPosition: true, // it can be true / false ( true means Fixed and false means absolute )
            BoxedLayout: false, // it can be true / false ( true means Boxed and false means Fluid ) 
        });
    });
    </script>