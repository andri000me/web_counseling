<script type="text/javascript">


    var table_konseling;
    var table_ketua;

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
                "url": "<?php echo base_url('dosen/konseling/konseling')?>",
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

       //================== table Ketua ===============================

       table_ketua = $('.table_ketua').DataTable({
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
                "url": "<?php echo base_url('dosen/konseling/list_table_ketua')?>",
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

        $("#table_ketua_filter").detach()

        $('#search_ketua').keyup(function(){
            table_ketua.search($(this).val()).draw();
        })
       //==================
        
            
    });

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
                "url": "<?php echo base_url('dosen/konseling/filterby')?>",
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
                "url": "<?php echo base_url('dosen/konseling/status_consult')?>",
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

     //status consult table
     $('.notif_consult').on('click', function () {
        $(".table_konseling").dataTable().fnDestroy();
        var id_consult = $(this).attr("data-id");
        var namepage = $(this).attr("label");
        $(".status_consult").removeClass("active");
        $("#status_terbaru").addClass("active");

        $("#page").html('<i class="mdi mdi-chevron-right"></i> '+namepage);
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
                "url": "<?php echo base_url('dosen/konseling/notif_consult')?>",
                "type": "POST",
                "data": {id_consult:id_consult},
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

    //delete pengajuan
    $('.delete_konseling').click(function(){
      var checkbox = $('.check_delete_konseling:checked');
      if(checkbox.length > 0){
            var checkbox_value = [];
               $(checkbox).each(function(){
                checkbox_value.push($(this).val());
               });

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
                                url:"<?php echo base_url(); ?>dosen/konseling/delete_konseling",
                                method:"POST",
                                beforeSend :function () {
                                            swal.fire({
                                                title: 'Menunggu',
                                                html: 'Memproses data',
                                                onOpen: () => {
                                                  swal.showLoading()
                                                }
                                              })      
                                         },  
                                data:{checkbox_value:checkbox_value},
                                success:function(data){
                                              swal.fire(
                                                'Berhasil',
                                                'Data Telah Terhapus',
                                                'success'
                                              ).then((result) => 
                                            {

                                             reload_table_konseling();

                                             })
                                          }
                                   })
                                  }
                              
                          });
                        }else{
                            swal.fire(
                                'Perhatian',
                                'Pilih data yang akan dihapus',
                                'warning'
                                )
                              }
                    })


//===================================acc Pengajuan ========================================

    function acc_konseling(status){
      var id = $('.acc_konseling').attr("data-id");

        swal.fire({
                            title: 'Konfirmasi',
                            text: "Anda Yakin",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Ya',
                            confirmButtonColor: '#FF0000',
                            cancelButtonText: 'Batal',
                          }).then((result) => {
                            if (result.value) {
                              $.ajax({
                                url : "<?php echo base_url('dosen/konseling/acc_konseling')?>/"+status,
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
                                data:{id:id, status:status}, 
                                success:function(data){
                      swal.fire(
                        'Berhasil',
                        'Pengajuan Berhasil Diupdate',
                        'success'
                      ).then((result) => 
                    {
                     reload_table_konseling();
                     
                     })
                       }
                  })
              }
         })


    }

//start konseling
    function start_konseling(id){
      var status = $('.start_konseling').attr("data-id");

                              $.ajax({
                                url : "<?php echo base_url('dosen/konseling/start_konseling')?>/"+id,
                                type: "POST",
                                dataType: "JSON",
                                data:{id:id, status:status}, 
                                success:function(data){
                      
                                window.location.href = '<?php echo base_url('dosen/konseling/chat')?>/'+id;
                     
                     }
                    })
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
