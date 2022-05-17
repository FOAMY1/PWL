<?php
include '../../conf.php';
include '../../conn.php';
$lib = new Library();
$nama = post('nama');
$alamat = post('alamat');
$logo = "";
if($_FILES['logo']['tmp_name']!=""){
$tmp_logo = $_FILES['logo']['tmp_name'];
$logo = $_FILES['logo']['name'];
move_uploaded_file($tmp_logo, "../../assets/foto/".$logo);
}
$add_status = $lib->add($nama, $alamat, $logo);
if($add_status){
    header("location:../../index.php?p=sekolah");
}
?>