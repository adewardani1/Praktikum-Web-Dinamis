<?php
//panggil koneksi database
include_once("function/koneksi.php");

//merupakan header file XML
header('Content-Type: text/xml');

//query tabel mahasiswa
$query = "SELECT * FROM pengeluaran ";
$hasil = mysqli_query($koneksi, $query);
$jumField = mysqli_num_fields($hasil);

echo "<?xml version='1.0'?>";

//parent node xml
echo "<data>";
echo $jumField;
//looping  data dari query mahasiswa
while ($data = mysqli_fetch_array($hasil)) {
    echo "<pengeluaran>";
    echo "<id>", $data['id'], "</id>";
    echo "<nama>", $data['nama'], "</nama>";
    echo "<jumlah>", $data['jumlah'], "</jumlah>";
    echo "<tanggal>", $data['tanggal'], "</tanggal>";
    echo "<keterangan>", $data['keterangan'], "</keterangan>";
    echo "</pengeluaran>";
}

// merupakan akhir file atau tag penutup node 
echo "</data>";
