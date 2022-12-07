<?php
// koneksi php ke mysql
$host = "localhost";
$user = "root";
$pass = "";
$db = "pts_db";
// menghubungkan php dengan database
$koneksi_db = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($koneksi));
