<?php
session_start();
include 'function/koneksi.php';
$username   = $_POST['username'];
$pass       = $_POST['password'];

$user = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$pass'");
$query = mysqli_num_rows($user);

if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
    if ($query > 0) {
        $row = mysqli_fetch_array($user);
        $_SESSION['password'] = $row['password'];
        header("location: index.php");
    } else {
        header("location: login.php?notif=login_gagal");
    }
} else {
    header("location: login.php?notif=captcha_salah");
}
