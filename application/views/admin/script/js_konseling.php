<script type="text/javascript">
    var table_pengajuan;
       

    $(document).ready(function() {

         table_pengajuan = $('.table_pengajuan').DataTable({
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
                "url": "<?php echo base_url('admin/konseling/list_pengajuan_konseling')?>",
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

        $("#table_pengajuan_filter").detach()

        $('#filter_pengajuan').keyup(function(){
            table_pengajuan.search($(this).val()).draw();
        })
       //==================
        
            
    });

    //orderby
     $('.orderby_pengajuan').on('click', function () {
        $(".table_pengajuan").dataTable().fnDestroy();
        var id = $(this).attr("data-id");
        var namepage = $(this).attr("label");
        $("#page").html('<i class="mdi mdi-chevron-right"></i> Filter By '+namepage);
         table_pengajuan = $('.table_pengajuan').DataTable({
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
                "url": "<?php echo base_url('admin/konseling/orderby_pengajuan')?>",
                "type": "POST",
                "data": {id:id},
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
           $("#table_pengajuan_filter").detach()
           $('#filter_pengajuan').keyup(function(){
                  table_pengajuan.search($(this).val()).draw();
            })

                     
         })

   
     //reload table
    function reload_table_konseling(e) {

        table_pengajuan.ajax.reload(null,false); 
         e.preventDefault();
    }

    //delete pengajuan
    $('.delete_pengajuan').click(function(){
      var checkbox = $('.check_delete_pengajuan:checked');
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
                                url:"<?php echo base_url(); ?>admin/konseling/delete_pengajuan",
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

</script>