<?php
include "koneksi.php";

//merupakan header file XML
header('Content-Type: text/xml');

//query tabel mahasiswa
$query = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($con, $query);
$jumField = mysqli_num_fields($hasil);

echo "<?xml version='1.0'?>";

//parent node xml
echo "<data>";
echo $jumField;
//looping  data dari query mahasiswa
while ($data = mysqli_fetch_array($hasil)) {
    echo "<mahasiswa>";
    echo "<nim>", $data['nim'], "</nim>";
    echo "<nama>", $data['nama'], "</nama>";
    echo "<jkel>", $data['jkel'], "</jkel>";
    echo "<alamat>", $data['alamat'], "</alamat>";
    echo "<tgllhr>", $data['tgllhr'], "</tgllhr>";
    echo "</mahasiswa>";
}

// merupakan akhir file atau tag penutup node 
echo "</data>";
