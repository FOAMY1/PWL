<?php
$engi = "mysql";
$nama= "localhost";
$root= "root";
$password = "";
$db_name = "db_tokoabc";
$koneksi = new PDO($engi . ':dbname=' . $db_name . ";host=" . $nama, $root, $password);
?>
