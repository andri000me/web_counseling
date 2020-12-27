<script type="text/javascript">


    var table;
       

    $(document).ready(function() {

         table = $('.table').DataTable({

            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false,
            "ordering": false,
            "processing": true, 
            "serverSide": true,
            "order": [], 
           
            "ajax": {
                "url": "<?php echo base_url('Dosen/konseling/list_perwalian')?>",
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

        $("#table_filter").detach()

        $('#search').keyup(function(){
            table.search($(this).val()).draw();
        })
       //==================
        
            
    });

    //reload table
    function reload_table(e) {

        table.ajax.reload(null,false); 
         e.preventDefault();
    }

</script>
<!-- perwalian
<script type="text/javascript">
    
            $(function () {

            $('body').on('click', '.list-group .list-group-item', function () {
                $(this).toggleClass('active');
            });
            $('.list-arrows button').click(function () {
                var $button = $(this), actives = '';
                if ($button.hasClass('move-left')) {
                    actives = $('.list-right ul li.active');
                    actives.clone().appendTo('.list-left ul');
                    actives.remove();
                } else if ($button.hasClass('move-right')) {
                    actives = $('.list-left ul li.active');
                    actives.clone().appendTo('.list-right ul');
                    actives.remove();
                }
            });
            $('.dual-list .selector').click(function () {
                var $checkBox = $(this);
                if (!$checkBox.hasClass('selected')) {
                    $checkBox.addClass('selected').closest('.well').find('ul li:not(.active)').addClass('active');
                } else {
                    $checkBox.removeClass('selected').closest('.well').find('ul li.active').removeClass('active');
                }
            });
            $('[name="SearchDualList"]').keyup(function (e) {
                var code = e.keyCode || e.which;
                if (code == '9') return;
                if (code == '27') $(this).val(null);
                var $rows = $(this).closest('.dual-list').find('.list-group li');
                var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
                $rows.show().filter(function () {
                    var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                    return !~text.indexOf(val);
                }).hide();
            });

        });


        // selected submit
         $('#btn-pilih').on('click',function(){
                var nidn = document.getElementById('nidn').value;
                var nim_value = $('#get_mhs_selected li');
                var nim = [];
                   $(nim_value).each(function(){
                    nim.push($(this).val());
                   });
                var not_nim_value = $('#get_mhs_notselected li');
                var not_nim = [];
                    $(not_nim_value).each(function(){
                        not_nim.push($(this).val());
                       });

                     $.ajax({
                    url: "<?php echo base_url('Dosen/konseling/proses_selected');?>",
                    method: "POST",
                    data :{nim:nim,nidn:nidn,not_nim:not_nim},
                    success : function(data){
                        swal.fire(
                        'Berhasil',
                        'Data Berhasil Diupdate',
                        'success'
                      ).then((result) => 
                     {
                     window.location.reload();
                     
                     })
                    },
                    error : function(data){
                        alert('error');
                    },
                    
                });
                return false;
            });
</script>

-->