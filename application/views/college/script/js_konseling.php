<script type="text/javascript">

   $('#textbox_pengajuan').summernote({
        placeholder: 'Type your email Here',
        tabsize: 2,
        height: 250
    });

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
                "url": "<?php echo base_url('college/konseling/konseling')?>",
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
                "url": "<?php echo base_url('college/konseling/filterby')?>",
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
                "url": "<?php echo base_url('college/konseling/status_consult')?>",
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
                                url:"<?php echo base_url(); ?>college/konseling/delete_konseling",
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


//===================================form pengajuan ========================================
    //get konselor role
    $("#consult_selection").change(function(){

            // variabel dari nilai combo box consult_selection
            var kode_selection = $("#consult_selection").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                url : "<?php echo base_url('college/konseling/get_konselor');?>",
                method : "POST",
                data : {kode_selection:kode_selection},
                async : false,
                dataType : "JSON",
                success: function(data){
                    var html = '';
                    var i;
                    html += '<option selected disabled>Pilih Konselor</option>';
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].nidn+'>'+data[i].name+'</option>';
                    }
                    $('#konselor').html(html);

                }
            });
        });
    //form-pengajuan

     $('#btn-pengajuan').click(function(e){
      e.preventDefault();
        swal.fire({
                            title: 'Konfirmasi',
                            text: "Buat Pengajuan Konseling?",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Ajukan',
                            confirmButtonColor: '#FF0000',
                            cancelButtonText: 'Batal',
                          }).then((result) => {
                            if (result.value) {
                               $.ajax({
                                url:"<?php echo base_url(); ?>college/konseling/proses_pengajuan",
                                method:"POST",
                                dataType:"JSON",
                                data:$('#form-pengajuan').serialize(),
                                beforeSend :function () {
                                            swal.fire({
                                                title: 'Menunggu',
                                                html: 'Memproses data',
                                                onOpen: () => {
                                                  swal.showLoading()
                                                }
                                              })      
                                         },
                                success:function(response){
                                            if(response.error){
                                              swal.close();
                                                  if (response.consult_selection) {
                                                      $('#consult_selection').addClass('is-invalid');
                                                       $('.errorconsult_selection').html(response.consult_selection);
                                                  }else{
                                                      $('#consult_selection').removeClass('is-invalid');
                                                      $('#consult_selection').addClass('is-valid');
                                                       $('.errorconsult_selection').html('');
                                                  }
                                                  if (response.konselor) {
                                                      $('#konselor').addClass('is-invalid');
                                                       $('.errorkonselor').html(response.konselor);
                                                  }else{
                                                      $('#konselor').removeClass('is-invalid');
                                                      $('#konselor').addClass('is-valid');
                                                       $('.errorkonselor').html('');
                                                  }
                                                  if (response.title) {
                                                      $('#title').addClass('is-invalid');
                                                       $('.errortitle').html(response.title);
                                                  }else{
                                                      $('#title').removeClass('is-invalid');
                                                      $('#title').addClass('is-valid');
                                                       $('.errortitle').html('');
                                                  }                                                    
                                             }else if(response.success){

                                              swal.fire(
                                                  'Berhasil',
                                                  'Konseling Telah Diajukan',
                                                  'success'
                                                ).then((result) => 
                                               {
                                               window.location.href = "<?php echo base_url('college/konseling/')?>";
                                               
                                               })


                                              }else{
                    
                                                $('#consult_selection').removeClass('is-invalid');
                                                    $('.errorconsult_selection').html('');
                                                $('#konselor').removeClass('is-invalid');
                                                    $('.errorkonselor').html('');
                                                $('#title').removeClass('is-invalid');
                                                     $('.errortitle').html('');
                                                
                                            } 
                                          }
                                   });
                                  return false;

                                  }
                              
                          });
                        
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
                                url : "<?php echo base_url('college/konseling/acc_konseling')?>/"+status,
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
                                url : "<?php echo base_url('college/konseling/start_konseling')?>/"+id,
                                type: "POST",
                                dataType: "JSON",
                                data:{id:id, status:status}, 
                                success:function(data){
                      
                                window.location.href = '<?php echo base_url('college/konseling/chat')?>/'+id;
                     
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
              
         


//===================================== konsult ===================================

</script>

