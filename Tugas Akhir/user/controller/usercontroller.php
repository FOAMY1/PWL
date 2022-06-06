<?php
include_once 'user/model/usermodel.php'; 
include_once 'conf.php';
session_start();
$bookmod = new usersmod();
$username = $_SESSION['login'];
$search = "WHERE username LIKE'%" . $username . "%'";
$data = $bookmod->selectall($search);
foreach ($data as $key) {
   $username = $key['username'];
   $foto = $key['logo'];
   $nama = $key['nama'];
   $password = $key['password'];
   $alamat = $key['alamat'];
}
?>