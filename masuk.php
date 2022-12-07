<?php
session_start();
// error_reporting(0);

include "koneksi.php";
$username = $_POST['nama'];
$pass = $_POST['password'];

$kirim = $_POST['submit'];

$query = "SELECT * FROM tb_user WHERE username = '$username'";
$hasil = mysqli_query($koneksi_db, $query);
$data = mysqli_fetch_assoc($hasil);

if (isset($kirim)) {
    if ($pass == $data['password'] && $username == $data['username']) {
        $_SESSION['level'] = $data['level'];
        $_SESSION['username'] = $data['username'];
        echo "<script>alert('login berhasil')</script>";
        header('Location: admin.php');
        exit;
    } else {
        echo "<script>alert('login gagal')</script>";
        header("location:index.php");
        exit;
    }
}
