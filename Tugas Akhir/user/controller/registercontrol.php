<?php
include '../../user/model/usermodel.php';
$adminmod = new usersmod();
$user = $_POST['user'];
$log = $adminmod->selectall("where username ='".$user."'");
$count = $log->rowCount();
if ($count > 0) {
    header("location:../../index.php?pilih=login&m=register&pesan=gagal");
} else {
    $pass = $_POST['pass'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $logo = "";
    if ($_FILES['logo']['tmp_name'] != "") {
        $tmp_logo = $_FILES['logo']['tmp_name'];
        $logo = $_FILES['logo']['name'];
        move_uploaded_file($tmp_logo, "../../assets/users/" . $logo);
    }
    if ($_POST['level'] == "1") {
        $level = 1;
    } else {
        $level = 2;
    }
    $addstatus = $adminmod->add($user, $pass, $nama, $alamat, $logo, $level);
    if ($addstatus) {
        header("location:../../index.php?pilih=login&pesan=reg");
    }
}
?>
