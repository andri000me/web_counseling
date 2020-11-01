<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Load library phpspreadsheet
require('./vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
// End load library phpspreadsheet

class Report extends CI_Controller {

// Load model
public function __construct()
{
parent::__construct();
}



// =========================== report user staff ========================
public function report_data_user($kode_role)
{
if($kode_role != 'ALL'){
$user = $this->Muser->report_data_userbyrole($kode_role);
}else{
$user = $this->Muser->report_data_user();
}
// Create new Spreadsheet object
$spreadsheet = new Spreadsheet();

//auto width cell
foreach(range('A','H') as $columnID) {
    $spreadsheet->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

// Set document properties
$spreadsheet->getProperties()->setCreator('STMIK BANDUNG')
->setLastModifiedBy('STMIK BANDUNG')
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

;

// Miscellaneous glyphs, UTF-8
$i=2; $no=1; foreach($user as $data) {

$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i, $no)
->setCellValue('B'.$i, $data->nidn)
->setCellValue('C'.$i, $data->name)
->setCellValue('D'.$i, $data->email)
->setCellValue('E'.$i, $data->prodi)
->setCellValue('F'.$i, $data->no_telp)
->setCellValue('G'.$i, $data->gender)
->setCellValue('H'.$i, $data->role)

;
$i++;
$no++;
}


// Rename worksheet
$spreadsheet->getActiveSheet()->setTitle('Report Data User '.date('d-m-Y H'));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Xlsx)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Report Data User.xlsx"');
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


// =========================== report college ========================
public function report_data_college()
{

$user = $this->Muser->report_data_college();

// Create new Spreadsheet object
$spreadsheet = new Spreadsheet();

//auto width cell
foreach(range('A','I') as $columnID) {
    $spreadsheet->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}

// Set document properties
$spreadsheet->getProperties()->setCreator('STMIK BANDUNG')
->setLastModifiedBy('STMIK BANDUNG')
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
->setCellValue('D1', 'JURUSAN')
->setCellValue('E1', 'ANGKATAN')
->setCellValue('F1', 'EMAIL')
->setCellValue('G1', 'JENIS KELAMIN')
->setCellValue('H1', 'NO TELEPON')
->setCellValue('I1', 'STATUS')

;

// Miscellaneous glyphs, UTF-8
$i=2; $no=1; foreach($user as $data) {

$spreadsheet->setActiveSheetIndex(0)
->setCellValue('A'.$i, $no)
->setCellValue('B'.$i, $data->nim)
->setCellValue('C'.$i, $data->name)
->setCellValue('D'.$i, $data->prodi)
->setCellValue('E'.$i, $data->generation)
->setCellValue('F'.$i, $data->email)
->setCellValue('G'.$i, $data->gender)
->setCellValue('H'.$i, $data->no_telp)
->setCellValue('i'.$i, $data->status_user)

;
$i++;
$no++;
}


// Rename worksheet
$spreadsheet->getActiveSheet()->setTitle('Report Data Mahasiswa '.date('d-m-Y H'));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Xlsx)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Report Data Mahasiswa.xlsx"');
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

}