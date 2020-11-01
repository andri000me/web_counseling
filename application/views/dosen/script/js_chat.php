
<script type="text/javascript">

$(document).ready(function() {
window.setTimeout(function() {
    //$(".custom-alert").alert('close'); <--- Do not use this
  
    $(".alertupload").slideUp(500, function() {
        $(this).remove();
    });
}, 3000);


//upload file
$( "#divfile" ).on( "click", function() {
    $("#inputfile").click();
});

$('.inputfile').change(function(){
    $("#btnupload").click();
});

//endupload

$('.message').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
       sendTxtMessage($(this).val());
    }
});

$('.btnSend').click(function(){
       sendTxtMessage($('.message').val());
});

function ScrollDown(){
    var elmnt = document.getElementById("content");
    var h = elmnt.scrollHeight;
   $('#content').animate({scrollTop: h}, 0);
}

function DisplayMessage(message){
    var id_user = $('#id_user').val();
    
        var str = '<div class="direct-chat-msg right">';
                str+='<div class="direct-chat-info clearfix">';
                 str+='<span class="direct-chat-name pull-right">'+id_user ;
                 str+='</span><span class="direct-chat-timestamp pull-left"></span>'; //23 Jan 2:05 pm
                 str+='<div class="direct-chat-text">'+message;
                 str+='</div></div>';
        $('#dumppy').append(str);
}

function sendTxtMessage(message){
    var messageTxt = message.trim();
    if(messageTxt!=''){
        //console.log(message);
        DisplayMessage(messageTxt);
        
                var id_user = $('#id_user').val();
                var id_consult = $('#id_consult').val();
                $.ajax({
                          dataType : "json",
                          type : 'post',
                          data : {messageTxt : messageTxt, id_user : id_user, id_consult : id_consult},
                          url: '<?php echo base_url('dosen/konseling/send_text_message')?>',
                          success:function(data)
                          {
                            GetChatHistory(id_consult)      
                          },
                          error: function (jqXHR, status, err) {
                             // alert('Local error callback');
                          }
                    });
                    
        
        
        $('.message').val('');
        $('.message').focus();
    }else{
        $('.message').focus();
    }
}

function GetChatHistory(id_consult){
                $.ajax({
                          //dataType : "json",

                          url: '<?php echo base_url('dosen/konseling/get_chat')?>/'+id_consult,
                          success:function(data)
                          {
                            $('#dumppy').html(data);
                            ScrollDown();    
                          },
                          error: function (jqXHR, status, err) {
                             // alert('Local error callback');
                          }
                    });
}


setInterval(function(){ 
    var id_consult = $('#id_consult').val();
    if(id_consult!=''){
        GetChatHistory(id_consult);
    }
}, 2600);


$('#finishconsult').click(function(){


    swal.fire({
                            title: 'Konfirmasi',
                            text: "Anda Yakin Akan Mengakhiri Konsultasi ?",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Ya',
                            confirmButtonColor: '#FF0000',
                            cancelButtonText: 'Batal',
                          }).then((result) => {
                                if (result.value) {
                                           Swal.fire({
                                        title: "Catatan",
                                        text: "Beri catatan atau keterangan akhir",
                                        input: 'textarea',
                                        confirmButtonText: 'Kirim',
                                        cancelButtonText: 'Kembali',
                                        showCancelButton: true,
                                        inputValidator: (value) => {
                                            return !value && 'Tuliskan Sesuatu!'
                                          }    
                                    }).then((result) => {

                                        if (result.value) {
                                            var text = result.value;
                                            var id_consult = $('#id_consult').val();
                                            $.ajax({
                                              dataType : "json",
                                              type : 'post',
                                              data : {text : text, id_consult : id_consult},
                                              url: '<?php echo base_url('dosen/konseling/catatan')?>',
                                              success:function(result)
                                              {
                                                swal.fire(
                                                    'Berhasil',
                                                    'Konseling Telah Selesai',
                                                    'success'
                                                  ).then((result) => 
                                                    {
                                                     window.location.href = '<?php echo base_url('dosen/konseling/')?>';
                                                     }) 
                                              },
                                              error: function (jqXHR, status, err) {
                                                 alert('error');
                                              }
                                        });
                                            //end ajax


                                        }
                                    });
                                }

                            });
});

$('.deletefile').click(function(){


    swal.fire({
                            title: 'Konfirmasi',
                            text: "Hapus berkas yang dipilih ?",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Hapus',
                            confirmButtonColor: '#FF0000',
                            cancelButtonText: 'Batal',
                          }).then((result) => {
                                            if(result.value){
                                            var id = $(this).attr('id');
                                            $.ajax({
                                              dataType : "json",
                                              type : 'post',
                                              data : {id : id},
                                              url: '<?php echo base_url('dosen/konseling/deletefile')?>',
                                              success:function(result)
                                              {
                                                swal.fire(
                                                    'Berhasil',
                                                    'Berkas Telah Terhapus',
                                                    'success'
                                                  ).then((result) => 
                                                    {
                                                     location.reload();
                                                     }) 
                                              },
                                              error: function (jqXHR, status, err) {
                                                 alert('error');
                                              }
                                        })
                                      }
                                            //end ajax
                        })

})

})
</script>
