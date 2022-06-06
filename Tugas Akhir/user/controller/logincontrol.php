<?php
session_start();
include '../../user/model/usermodel.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
$adminmod = new usersmod();
$log = $adminmod->login($user,$pass);
$count = $log->rowCount();
$row = $log->fetch(PDO::FETCH_ASSOC);
$lvl = $row['level'];
$nama = $row['nama'];
$gambar = $row['logo'];
if ($count == 1 && !empty($row)) {
    //menciptakan session
    $_SESSION['login'] = $user;
    $_SESSION['name'] = $nama;
    $_SESSION['gambar'] = $gambar;
    if($lvl == 1){
        $_SESSION['level'] = "pelanggan";
    }
    else{
    $_SESSION['level'] = "publisher";
    }
    header("location:../../index.php?pilih=home");
}
else{
    header("location:../../index.php?pilih=login&pesan=gagal");
}
?>