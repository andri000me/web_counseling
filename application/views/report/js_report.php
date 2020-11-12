<script type="text/javascript">

	$(document).ready(function() {

     //pilih rekap
    $("#pilih_rekap").change(function(){
    		$('#group_college').attr('style','display : none');


    		var nidn = $("#nidn").val();
            var pilihan = $("#pilih_rekap").val();
            var college = $("#pilih_college").val();
            if (pilihan == '1'){
                $('#group_college').removeAttr('style');
                  $.ajax({
	                url : "<?php echo base_url('report/report/get_report_bycollege');?>",
	                method : "POST",
	                data : {nidn:nidn},
	                async : false,
	                dataType : "JSON",
	                success: function(data){
	                    var html = '';
	                    var i;
	                    html += '<option value="" selected disabled >Pilih Mahasiswa</option>';
	                    for(i=0; i<data.length; i++){
	                       html += '<option value='+data[i].nim+'>'+data[i].name+'</option>';
	                    }
	                    $('#pilih_college').html(html);

	                }
	            });
            }else{
            	$('#group_college').attr('style','display : none');
                $('#pilih_college').removeAttr('required');
            }
        })

    //pilih rekap wali
    $("#pilih_rekap_wali").change(function(){
    		$('#group_college_wali').attr('style','display : none');


    		var nidn = $("#nidn_wali").val();
            var pilihan = $("#pilih_rekap_wali").val();
            var college = $("#pilih_college_wali").val();
            if (pilihan == '1'){
                $('#group_college_wali').removeAttr('style');
                  $.ajax({
	                url : "<?php echo base_url('report/report/get_report_wali_bycollege');?>",
	                method : "POST",
	                data : {nidn:nidn},
	                async : false,
	                dataType : "JSON",
	                success: function(data){
	                    var html = '';
	                    var i;
	                    html += '<option value="" selected disabled >Pilih Mahasiswa</option>';
	                    for(i=0; i<data.length; i++){
	                       html += '<option value='+data[i].nim+'>'+data[i].name+'</option>';
	                    }
	                    $('#pilih_college_wali').html(html);

	                }
	            });
            }else{
            	$('#group_college_wali').attr('style','display : none');
                $('#pilih_college_wali').removeAttr('required');
            }
        })

    })
</script>