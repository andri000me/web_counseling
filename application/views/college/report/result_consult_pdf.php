
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>REKAP CHAT HASIL KONSELING</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
<style>
    @page { size: A4 }
  
    h1 {
        font-weight: bold;
        font-size: 20pt;
        text-align: center;
    }
  
    table {
        border-collapse: collapse;
        width: 100%;
    }
  
    .table th {
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
</style>
</head>
<body class="A4">
    <section class="sheet padding-10mm">
        <h1>REKAP CHAT HASIL KONSELING</h1>
  
        <table class="table">
            <thead>
                <tr>
                    <th>WAKTU</th>
                    <th>PENGIRIM</th>
                    <th>PESAN</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row ) {
                    $login_id = $this->session->userdata('no_unique');
                    $id_user = $row->id_user;
                    if($login_id == $id_user)
                    {
                        $name = $row->name_college;
                    }else{
                        $name = $row->name_staff;
                    }
                 ?>
                <tr>
                    <td width="50"><?php echo date('d M H:i A',strtotime($row->datesend)) ?></td>
                    <td width="180"><?php echo $name ?></td>
                    <td><?php echo $row->message ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </section>
</body>
</html>