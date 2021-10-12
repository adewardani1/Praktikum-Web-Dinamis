<?php
echo "<head><title>My Guest Book</head></title>";   //Judul
$fp = fopen("guestbook.txt", "a+");    //Menginisialisasi $fp dan membuka gustbook.txt (a+)

//Mengisi nilai variable nama alamat email status komtentar dari hasil inputan form dengan method post
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$status = $_POST['status'];
$komentar = $_POST['komentar'];

fputs($fp, "$nama|$alamat|$email|$status|$komentar\n"); //Menuliskan teks ke dalamfile guestbook.txt
fclose($fp); //menutup file

//output html
echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo "<a href=tampilan.html> Isi Buku Tamu </a><br>";
echo "<a href=lihat.php> Lihat Buku Tamu </a><br>";
