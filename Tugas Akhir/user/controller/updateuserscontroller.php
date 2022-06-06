<?php
include_once '../model/usermodel.php'; 
session_start();
$bookmod = new usersmod();
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$address = $_POST['address'];
$picture = "";
if ($_FILES['logo']['tmp_name'] != "") {
    $tmp_logo = $_FILES['logo']['tmp_name'];
    $logo = $_FILES['logo']['name'];
    move_uploaded_file($tmp_logo, "../../assets/users/" . $logo);
    $picture = ",`gambar`='" . $logo . "'";
}
$go = $bookmod->edit($username,$password,$name,$address,$picture);
if($go){
    $_SESSION['login'] = $username;
    $_SESSION['name'] = $name;
    header('location:../../index.php?pilih=home&pesan=edit');
}
else{
    header('location:../../index.php?pilih=home&pesan=edit');
}
?>