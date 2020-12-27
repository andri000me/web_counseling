
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>REKAP SEMUA DATA KONSULTASI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
<style>
    @page { size: A4 }
  
    h3 {
        font-weight: bold;
        text-align: center;
    }
  
    table {
        border-collapse: collapse;
        width: 100%;
    }

    table.mhs {
        border-collapse: collapse;
        width: 50%;
        margin-top: 1%;
        margin-bottom: 5%;
    }

    .mhs td.first {
        font-weight: bold;
    }
  
    .table th {
        float:left;
        padding: 8px 8px;
        border:1px solid #000000;
        text-align: center;
    }
  
    .table td {
        padding: 3px 3px;
        border:1px solid #000000;
    }
  
    .text-center {
        text-align: center;
    }
    .right{
        float: right;
    }
    .left{
        float: left;
        margin-top: 3%; 
    }
    .bottom{
        margin-top: 25%;
    }
    .box-date{
        width:40%;
        border: 1px solid #000000;
        padding: 10px;
    }
</style>
</head>
<body class="A4">
    <section class="sheet padding-10mm">
        <h3>REKAP SEMUA DATA KONSULTASI</h3>
        <hr>
        <div class="box-date">
        <p>Rekap Dari Tanggal : <?php echo $date_start; ?><br>
        Sampai Tanggal : <?php echo $date_end; ?></p>
        </div>
        <?php foreach ($data as $row ) {
                        $prodi_staff = $row->id_prodi_staff;
                        $prodi_college = $row->id_prodi_college;
                        if($prodi_staff == '12'){
                            $prodi_staff = 'Teknik Informatika';
                        }else{
                            $prodi_staff = 'Sistem Informasi';
                        }
                        if($prodi_college == '12'){
                            $prodi_college = 'Teknik Informatika';
                        }else{
                            $prodi_college = 'Sistem Informasi';
                        }
                     ?>
         <div class="left">
        <b> INFO KONSELOR </b>
             <table class="mhs" >
                <tbody>
                    <tr>
                        <td class="first">NIDN</td>
                        <td>: <?php echo $row->nidn ?></td>
                    </tr>
                    <tr>
                        <td class="first">Nama Lengkap</td>
                        <td>: <?php echo $row->name_staff ?></td>
                    </tr>
                    <tr>
                        <td class="first">Email</td>
                        <td>: <?php echo $row->email_staff ?></td>
                    </tr>
                    <tr>
                        <td class="first">No Telepon</td>
                        <td>: <?php echo $row->no_telp_staff ?></td>
                    </tr>
                    <tr>
                        <td class="first">Prodi</td>
                        <td>: <?php echo $prodi_staff ?></td>
                    </tr>
                    <tr>
                        <td class="first">Jenis Kelamin</td>
                        <td>: <?php echo $row->gender_staff ?></td>
                    </tr>
                    <tr>
                        <td class="first">Kedudukan</td>
                        <td>: <?php echo $row->role ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php break;
        } ?>
        <div class="bottom">
        <h4> Data Semua Konsultasi </h4>
        <table class="table">
            
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Mahasiswa</th>
                    <th>Tipe Konsultasi</th>
                    <th>Subject</th>
                    <th>Tgl Konsultasi</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row ) {
                     ?>
                <tr>
                    <td><?php echo $row->id_consult ?></td>
                    <td ><?php echo $row->name_college ?></td>
                    <td ><?php echo $row->selection ?></td>
                    <td width="40%"><?php echo $row->title ?></td>
                    <td><?php echo $row->date ?></td>
                    <td><?php echo $row->status_consult ?></td>
                </tr>
                 <?php 
                } ?>
            </tbody>
        </table>
    </div>

    </section>
</body>
</html>