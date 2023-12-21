<?php

include "connect.php";

require 'vendor/autoload.php';
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1','Nama');
$sheet->setCellValue('B1','Negara');
$sheet->setCellValue('C1','Kota');
$sheet->setCellValue('D1','Kode Pos');
$sheet->setCellValue('E1','Jenis Kelamin');
$sheet->setCellValue('F1','Nomor HP');
$sheet->setCellValue('G1','Tanggal Lahir');
$sheet->setCellValue('H1','Email');

$query = "SELECT * FROM tbl_register";
$result = mysqli_query($connect, $query);

$no = 1;
while ($row = mysqli_fetch_array($result)) {
    $sheet->setCellValue("A".$no, $row["nama"]);
    $sheet->setCellValue("B".$no, $row["negara"]);
    $sheet->setCellValue("C".$no, $row["kota"]);
    $sheet->setCellValue("D".$no, $row["kode_pos"]);
    $sheet->setCellValue("E".$no, $row["jenis_kelamin"]);
    $sheet->setCellValue("F".$no, $row["nomor_handphone"]);
    $sheet->setCellValue("G".$no, $row["tanggal_lahir"]);
    $sheet->setCellValue("H".$no, $row["email"]);
}   

$writer = new Xlsx($spreadsheet);
$writer->save("excel.xlsx");

?>