<script type="text/javascript">
   $(document).ready(function(){
      

    toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-bottom-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    Command: toastr["info"]("Selamat datang di halaman Dashboard")
  })

$(function() {
    // ============================================================== 
    // Newsletter
    // ============================================================== 


    var chart = [chart];
    
    // ============================================================== 
    // Our Visitor
    // ============================================================== 
    var chart = c3.generate({
        bindto: '#visitor',
        data: {
            columns: [
            <?php 
            $perkuliahan = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL001' ")->num_rows() ;
            $KRS = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL002' ")->num_rows() ;
            $PRS = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL003' ")->num_rows() ;
            $nilai = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL004' ")->num_rows() ;
            $SKRIPSI = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL005' ")->num_rows() ;
            $kp = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL006' ")->num_rows() ;
            $personal = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL007' ")->num_rows() ;
            $keuangan = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL008' ")->num_rows() ;
            $lainnya = $this->db->query("SELECT * FROM ms_consult where kode_selection = 'SL009' ")->num_rows() ;

            ?>
              
              ['Perkuliahan', <?php echo $perkuliahan ?>],
              ['KRS', <?php echo $KRS ?>],
              ['PRS', <?php echo $PRS ?>],
              ['Permasalahan Nilai', <?php echo $nilai ?>],
              ['SKRIPSI', <?php echo $SKRIPSI ?>],
              ['Kerja Praktek', <?php echo $kp ?>],
              ['Personal', <?php echo $personal ?>], 
              ['Keuangan', <?php echo $keuangan ?>],
              ['Lainnya', <?php echo $lainnya ?>],

            ],

            type: 'pie',
            tooltip: {
            show: true
        }
        },
        pie: {
            label: {
                show: false
            },
            title: "Ratio",
            width: 35,
            
        },
        
        legend: {
            hide: false
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
            
        },
        color: {
            pattern: ['#00E0FF', '#000FFF', '#CD00FF', '#FF002B','#27FF00', '#00F2C2', '#2BAC0C', '#0CACAA', '#F29E00']
        }
    });
 
});

</script>