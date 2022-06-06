<?php
session_start();
include_once '../model/crudbookmodel.php';
$bookmod = new bookmod();
$isbn = $_POST['isbn'];
$log = $bookmod->selectall("where isbn = '".$isbn."'");
$count = $log->rowCount();
if ($count > 0) {
    header('location:../index.php?pilih=upload&pesan=gagal');
} else {
    if (strlen($_POST['isbn']) == 13 && preg_match('/^\d+$/', $_POST['isbn'])) {
        $price = $_POST['price'];
        $description = $_POST['description'];
        $writer = $_POST['writer'];
        $thickness = $_POST['thickness'];
        $bookname = $_POST['bookname'];
        $picture = "";
        if ($_FILES['logo']['tmp_name'] != "") {
            $tmp_logo = $_FILES['logo']['tmp_name'];
            $picture = $_FILES['logo']['name'];
            move_uploaded_file($tmp_logo, "../../assets/books/" . $picture);
        }
        $go = $bookmod->add($isbn, $bookname, $writer, $price, $thickness, $description, $picture, $_SESSION['login']);
        if ($go) {
            header('location:../../index.php?pilih=home&pesan=save');
        }
    }
    else{
        header('location:../../index.php?pilih=upload&pesan=isbn');
    }
}
