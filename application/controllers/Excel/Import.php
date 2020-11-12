<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Load library phpspreadsheet
require('./vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
// End load library phpspreadsheet

class Import extends CI_Controller {

// Load model
public function __construct()
{
parent::__construct();
}

// ========================== data user ================================
public function format_import_user()
{
// Create new Spreadsheet object
$spreadsheet = new Spreadsheet();

//auto width cell
foreach(range('A','H') as $columnID) {
    $spreadsheet->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

// Set document properties
$spreadsheet->getProperties()->setCreator('Man 2 Bandung')
->setLastModifiedBy('Man 2 Bandung')
->setTitle('Office 2007 XLSX Test Document')
->setSubject('Office 2007 XLSX Test Document')
->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
->setKeywords('office 2007 openxml php')
->setCategory('result file');

// Add some data
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A1', 'NO')
->setCellValue('B1', 'NIDN')
->setCellValue('C1', 'NAMA')
->setCellValue('D1', 'EMAIL')
->setCellValue('E1', 'PRODI')
->setCellValue('F1', 'NO TELEPON')
->setCellValue('G1', 'JENIS KELAMIN')
->setCellValue('H1', 'HAK AKSES')

->setCellValue('L1', 'KODE PRODI')
->setCellValue('L2', '12 : Teknik Informatika')
->setCellValue('L3', '32 : Sistem Informasi')
->setCellValue('L4', '99 : Non Prodi')

->setCellValue('O1', 'HAK AKSES')
->setCellValue('O2', 'ADM : ADMIN')
->setCellValue('O3', 'KTA : KETUA')
->setCellValue('O4', 'DSN : DOSEN WALI')
->setCellValue('O5', 'BKU : KEUANGAN')
;


// Rename worksheet
$spreadsheet->getActiveSheet()->setTitle('Format Import Data '.date('d-m-Y H'));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Xlsx)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Format Import Data.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: public'); // HTTP/1.0

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
exit;
}


public function import_data_user(){


        $config['upload_path'] = realpath('assets/file');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('input_import_user')) {
              $data_upload = $this->upload->data();
               $excelreader     = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
               $loadexcel         = $excelreader->load('assets/file/'.$data_upload['file_name']);
               $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
              $data = array();
              $auth = array();
              $numrow = 1;
                foreach ($sheet as $row){
                                if($numrow > 1){
                                    array_push($data,  array(
                                        'nidn'              =>  $row['B'],
                                        'name'              =>  $row['C'],
                                        'email'           	=>  $row['D'],
                                        'id_prodi'         	=>  $row['E'],
                                        'no_telp'          	=>  $row['F'],
                                        'gender'            =>  $row['G'],
                                        'kode_role'         =>  $row['H'],
                                        'id_users_status'   =>  '1',
                                        'photo'   =>  'assets/assets/images/logo/d2.jpg',

                                    ));
                                     array_push($auth,  array(
                                        'no_unique'             =>  $row['B'],
                                        'username'              =>  $row['B'],
                                        'password'              =>  sha1($row['B']),
                                        'role'             =>  $row['H'],

                                    ));
                
                        }
                        $numrow++;
                  }
                  $this->db->insert_on_duplicate_update_batch('ms_auth', $auth);
                  $this->db->insert_on_duplicate_update_batch('ms_users_staff', $data);

                  unlink(realpath('assets/file/'.$data_upload['file_name']));

          }else{
            unlink(realpath('assets/file/'.$data_upload['file_name']));
          }
}


//================================== data college ======================================

// Export ke excel
public function format_import_college()
{
// Create new Spreadsheet object
$spreadsheet = new Spreadsheet();

//auto width cell
foreach(range('A','H') as $columnID) {
    $spreadsheet->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

// Set document properties
$spreadsheet->getProperties()->setCreator('Man 2 Bandung')
->setLastModifiedBy('Man 2 Bandung')
->setTitle('Office 2007 XLSX Test Document')
->setSubject('Office 2007 XLSX Test Document')
->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
->setKeywords('office 2007 openxml php')
->setCategory('result file');

// Add some data
$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A1', 'NO')
->setCellValue('B1', 'NIM')
->setCellValue('C1', 'NAMA')
;


// Rename worksheet
$spreadsheet->getActiveSheet()->setTitle('Format Import Data '.date('d-m-Y H'));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Xlsx)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Format Import Data.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: public'); // HTTP/1.0

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
exit;
}


public function import_data_college(){


        $config['upload_path'] = realpath('assets/file');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('input_import')) {
              $data_upload = $this->upload->data();
               $excelreader     = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
               $loadexcel         = $excelreader->load('assets/file/'.$data_upload['file_name']);
               $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
              $data = array();
              $auth = array();
              $numrow = 1;
                foreach ($sheet as $row){
                      $nim = $row['B'];
                      $prodi=substr($nim,0,2);
                      $ang=substr($nim,2,2);
                      $angkatan = '20'.$ang;
                                if($numrow > 1){
                                    array_push($data,  array(
                                        'nim'              =>  $nim,
                                        'name'              =>  $row['C'],
                                        'id_prodi'          =>  $prodi,
                                        'generation'        =>  $angkatan,
                                        'kode_role'         =>  'MHS',
                                        'id_users_status'   =>  '1',
                                        'photo' => 'assets/assets/images/logo/d1.jpg',

                                    ));
                                     array_push($auth,  array(
                                        'no_unique'             =>  $nim,
                                        'username'              =>  $nim,
                                        'password'              =>  sha1($nim),
                                        'role'             =>  'MHS',

                                    ));
                
                        }
                        $numrow++;
                  }
                  $this->db->insert_on_duplicate_update_batch('ms_auth', $auth);
                  $this->db->insert_on_duplicate_update_batch('ms_users_college', $data);

                  unlink(realpath('assets/file/'.$data_upload['file_name']));

          }else{
            unlink(realpath('assets/file/'.$data_upload['file_name']));
          }
}

}