<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string 
$pdf->Cell(190, 7, 'RESPONSI PEMROGRAMAN WEB DINAMIS', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'DAFTAR KAS', 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 6, 'ID', 1, 0);
$pdf->Cell(85, 6, 'NAMA ANGGOTA', 1, 0);
$pdf->Cell(35, 6, 'JUMLAH SETOR', 1, 0);
$pdf->Cell(25, 6, 'TANGGAL', 1, 1);

include 'function/koneksi.php';
$mahasiswa = mysqli_query($koneksi, "select * from kas");
while ($row = mysqli_fetch_array($mahasiswa)) {
    $pdf->Cell(20, 6, $row['id'], 1, 0);
    $pdf->Cell(85, 6, $row['nama'], 1, 0);
    $pdf->Cell(35, 6, $row['jumlah'], 1, 0);
    $pdf->Cell(25, 6, $row['tanggal'], 1, 1);
}
$pdf->Output();
