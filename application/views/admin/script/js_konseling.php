<script type="text/javascript">


    var table_konseling;

    $(document).ready(function() {

         table_konseling = $('.table_konseling').DataTable({
              createdRow: function( row, data, dataIndex ) {
                $(row).find('td').addClass('max-texts');
            },

            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false,
            "ordering": false,
            "processing": true, 
            "serverSide": true,
            "order": [], 
           
            "ajax": {
                "url": "<?php echo base_url('admin/konseling/konseling')?>",
                "type": "POST"
            },

            "columnDefs": [
            { 
                "targets": [ -1 ], 
                "orderable": false, 
                "className" : "max-texts"

            },
            ],

            "oLanguage": {
            "sZeroRecords": "Tidak ada data yang tersedia"
            },
            "fnInitComplete": function ( oSettings ) {
            oSettings.oLanguage.sZeroRecords = "Data tidak ditemukan"
            }

         });

        $("#table_konseling_filter").detach()

        $('#search_konseling').keyup(function(){
            table_konseling.search($(this).val()).draw();
        })
      })


    //orderby
     $('.filterby').on('click', function () {
        $(".table_konseling").dataTable().fnDestroy();
        var kode_selection = $(this).attr("data-id");
        var namepage = $(this).attr("label");
        $("#page").html('<i class="mdi mdi-chevron-right"></i> Filter By '+namepage);
         table_konseling = $('.table_konseling').DataTable({
             createdRow: function( row, data, dataIndex ) {
                $(row).find('td').addClass('max-texts');
            },
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false,
            "ordering": false,
            "processing": true, 
            "serverSide": true,
            "order": [], 
           
            "ajax": {
                "url": "<?php echo base_url('admin/konseling/filterby')?>",
                "type": "POST",
                "data": {kode_selection:kode_selection},
            },

            "columnDefs": [
            { 
                "targets": [ -1 ], 
                "orderable": false, 

            },
            ],

            "oLanguage": {
            "sZeroRecords": "Tidak ada data yang tersedia"
            },
            "fnInitComplete": function ( oSettings ) {
            oSettings.oLanguage.sZeroRecords = "Data tidak ditemukan"
            }

         });
           $("#table_konseling_filter").detach()
           $('#search_konseling').keyup(function(){
                  table_konseling.search($(this).val()).draw();
            })

                     
         })

    //status consult table
     $('.status_consult').on('click', function () {
        $(".table_konseling").dataTable().fnDestroy();
        var id_consult_status = $(this).attr("data-id");
        var namepage = $(this).attr("label");
        $(".status_consult").removeClass("active");
        if (id_consult_status == '1') {
          $("#status_diterima").addClass("active");
        }else if (id_consult_status == '2') {
          $("#status_berlangsung").addClass("active");
        }else if (id_consult_status == '3') {
          $("#status_selesai").addClass("active");
        }else if (id_consult_status == '4') {
          $("#status_ditolak").addClass("active");
        }else if (id_consult_status == '5') {
          $("#status_pending").addClass("active");
        }else{
          $("#status_terbaru").addClass("active");
        }
        $("#page").html('<i class="mdi mdi-chevron-right"></i> Status '+namepage);
         table_konseling = $('.table_konseling').DataTable({
             createdRow: function( row, data, dataIndex ) {
                $(row).find('td').addClass('max-texts');
            },
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false,
            "ordering": false,
            "processing": true, 
            "serverSide": true,
            "order": [], 
           
            "ajax": {
                "url": "<?php echo base_url('admin/konseling/status_consult')?>",
                "type": "POST",
                "data": {id_consult_status:id_consult_status},
            },

            "columnDefs": [
            { 
                "targets": [ -1 ], 
                "orderable": false, 

            },
            ],

            "oLanguage": {
            "sZeroRecords": "Tidak ada data yang tersedia"
            },
            "fnInitComplete": function ( oSettings ) {
            oSettings.oLanguage.sZeroRecords = "Data tidak ditemukan"
            }

         });
           $("#table_konseling_filter").detach()
           $('#search_konseling').keyup(function(){
                  table_konseling.search($(this).val()).draw();
            })

                     
         })


     //reload table
    function reload_table_konseling(e) {

        table_konseling.ajax.reload(null,false); 
         e.preventDefault();
    }

  



  //========================report consult===========================
  function showcatatan(){
      var catatan = $('#inputcatatan').val();

        swal.fire({
                title: "Catatan",
                text: catatan,
                confirmButtonText: 'OK',
              })
      }
              
         
    </script>
