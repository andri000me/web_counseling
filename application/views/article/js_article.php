<script type="text/javascript">
	var table_article;

    $(document).ready(function() {

         table_article = $('.table_article').DataTable({
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
                "url": "<?php echo base_url('Article/article/list_article')?>",
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

        $("#table_article_filter").detach()

        $('#search_article').keyup(function(){
            table_article.search($(this).val()).draw();
        })


        //add function

	    $("#submit_article").click(function (event) {

	        event.preventDefault();
	        var form = $('#form_article')[0];
	        var data = new FormData(form);
	       	data.append( 'file', $( '#file' )[0].files[0] );
	        $("#submit_article").prop("disabled", true);

	        $.ajax({
	            type: "POST",
	            enctype: 'multipart/form-data',
	            url: '<?php echo base_url('Article/article/add_article')?>',
	            data: data,
	            dataType: 'JSON',
	            processData: false,
	            contentType: false,
	            cache: false,
	            timeout: 600000,

	            success: function (response) {

	                if(response.error){
	                    if (response.file) {
	                         $('.errorfile').html(response.file);
	                    }else{
	                         $('.errorfile').html('');
	                    }
	                    if (response.title) {
	                         $('.errortitle').html(response.title);
	                    }else{
	                         $('.errortitle').html('');
	                    }
	                    if (response.content) {
	                         $('.errorcontent').html(response.content);
	                    }else{
	                         $('.errorcontent').html('');
	                    }
	                }else if(response.success){

                    swal.fire(
                        'Berhasil',
                        'Data User Telah Ditambahkan',
                        'success'
                      ).then((result) => 
                     {
                  
                     location.reload();
                     
                     })

                }else{
                    
                        $('.errorfile').html('');
                        $('.errortitle').html('');
                        $('.errorcontent').html('');
                }
	                $("#submit_article").prop("disabled", false);
	                
	            },
	            error: function (e) {

	                console.log("ERROR : ", e);
	                $("#submit_article").prop("disabled", false);

	            }
	        });

	    });

    })

	 $('#file').on('change',function(){
	            //get the file name
	            var fileName = $(this).val();
	            //replace the "Choose a file" label
	            $(this).next('.custom-file-label').html(fileName);
	        })


    $('#content').summernote({
        placeholder: 'Tuliskan konten disini',
        tabsize: 2,
        height: 250
    });


          //reload table
    function reload_table_article(e) {

        table_article.ajax.reload(null,false); 
         e.preventDefault();
    }

      //delete artikel
    $('.delete_article').click(function(){
      var checkbox = $('.check_delete_article:checked');
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
                                url:"<?php echo base_url(); ?>Article/article/delete_article",
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

                                             reload_table_article();

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


      //update status
    function update_status(id){

             swal.fire({
                            title: 'Konfirmasi',
                            text: "Update Status?",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Update',
                            confirmButtonColor: '#FF0000',
                            cancelButtonText: 'Batal',
                          }).then((result) => {
                            if (result.value) {
                               $.ajax({
                                url:"<?php echo base_url(); ?>Article/article/update_status/"+id,
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
                                success:function(data){
                                              swal.fire(
                                                'Berhasil',
                                                'Arikel Telah Terupdate',
                                                'success'
                                              ).then((result) => 
                                            {

                                             location.reload();

                                             })
                                          }
                                   })
                                  }
                              
                          });
                        }
</script>