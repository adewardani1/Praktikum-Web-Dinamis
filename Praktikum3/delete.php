<?php
// include database connection file
include_once("koneksi.php");
/// mengambil data nim lalu memasukkan kedalam variabel
$nim = $_GET['nim'];
// query SQL untuk delete data berdasarkan nim
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim=’$nim’");
// mengalihkan kehalaman index.php
header("Location:index.php");
