<script type="text/javascript">
    var table_wali;
    $(document).ready(function() {



      //table
        table_wali = $('.table_wali').DataTable({ 

            "processing": true, 
            "serverSide": true,
            "order": [], 
           
            "ajax": {
                "url": "<?php echo base_url('admin/konseling/list_perwalian')?>",
                "type": "POST"
            },

            "columnDefs": [
            { 
                "targets": [ -1 ], 
                "orderable": false, 

            },
            ],

        });

    });

   
    //reload table
    function reload_table_wali(e) {

        table_wali.ajax.reload(null,false); 
         e.preventDefault();
    }


</script>


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
                    url: "<?php echo base_url('admin/konseling/proses_selected');?>",
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