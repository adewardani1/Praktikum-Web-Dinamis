<?php
$myDir = "C:/xampp/htdocs/praktikum_pwd/Praktikum1/upload_file/"; //Alamat direktori file
$dir = opendir($myDir); //menginisialisasikan $dir dengan opendir($myDir)
echo "Isi folder (klik link untuk download : <br>"; //Output menggunakan while
while ($tmp = readdir($dir)) {
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
}
closedir($dir); //menutup $dir
