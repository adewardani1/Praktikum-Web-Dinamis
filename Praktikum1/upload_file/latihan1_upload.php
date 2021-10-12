<?php
$lokasi_file = $_FILES['fupload']['tmp_name']; //Menginisialisasikan $lokasi_file dengan nama file yang akan diupload
$nama_file = $_FILES['fupload']['name'];  //Menginisialisasikan $nama_file dengan nama file yang akan diupload
$deskripsi = $_POST['deskripsi']; //Menginisialisasikan $deskripsi dengan nilai inputan deskripsi
$direktori = "C:/xampp/htdocs/praktikum_pwd/Praktikum1/upload_file/$nama_file"; //Menginisialisasikan $direktori dengan nilai alamat direktori file
if (move_uploaded_file($lokasi_file, $direktori)) {
    echo "Nama File: <b>$nama_file</b> berhasil di upload <br>"; //output ketika berhasil upload
    echo "Deskripsi File :<br>$deskripsi"; //output deskripsi file
} else {
    echo "File gagal diupload"; //output ketika gagal upload
}
