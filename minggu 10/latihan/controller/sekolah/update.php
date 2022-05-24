<?php
include '../../conf.php';
include '../../model/conn.php';
$lib = new Library();
$id = post('id');
$nama = post('nama');
$alamat = post('alamat');
$update_logo = "";
if ($_FILES['logo']['tmp_name'] != "") {
    $tmp_logo = $_FILES['logo']['tmp_name'];
    $logo = $_FILES['logo']['name'];
    move_uploaded_file($tmp_logo, "../../assets/foto/" . $logo);
    $update_logo = ",`logo`='" . $logo . "'";
}
$up = $lib->edit($id,$nama,$alamat,$update_logo);
if($up)
{
    header("location:../../index.php?p=sekolah");
}
?>