<?php
//panggil koneksi database
include "koneksi.php";

//query tabel Mahasiswa
$sql = "select * from mahasiswa order by nim";
$tampil = mysqli_query($con, $sql);

//percabangan
if (mysqli_num_rows($tampil) > 0) {
    $no = 1;
    //buat data mahasiswa menjadi array
    $response = array();
    $response["data"] = array();
    //looping data dari query mahasiswa
    while ($r = mysqli_fetch_array($tampil)) {
        $h['nim'] = $r['nim'];
        $h['nama'] = $r['nama'];
        $h['jkel'] = $r['jkel'];
        $h['alamat'] = $r['alamat'];
        $h['tgllhr'] = $r['tgllhr'];
        array_push($response["data"], $h);
    }
    //mengubah data array menjadi data json
    echo json_encode($response);
} else {
    //jika data tidak ada maka akan menampilkan "tidak ada data"
    $response["message"] = "tidak ada data";
    echo json_encode($response);
}
