<?php
$host = "localhost"; // ganti dengan host database Anda
$user = "root";
$pass = ""; 
$db = "db_helpdesk";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>