
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>REKAP DATA USER</title>
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
        <h1>REKAP DATA USER</h1>
  
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIDN</th>
                    <th>NAMA</th>
                </tr>
            </thead>
            <tbody>
                
                <?php $no = 1; foreach ($data as $row ) {
                    
                    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->nidn ?></td>
                    <td><?php echo $row->name ?></td>
                </tr>
            <?php  } ?>
            </tbody>
        </table>
    </section>
</body>
</html>