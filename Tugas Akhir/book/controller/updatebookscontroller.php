<?php
include_once '../model/crudbookmodel.php'; 
$bookmod = new bookmod();
$isbn = $_POST['isbn'];
$price = $_POST['price'];
$description = $_POST['description'];
$writer = $_POST['writer'];
$thickness = $_POST['thickness'];
$bookname = $_POST['bookname'];
$picture = "";
if ($_FILES['logo']['tmp_name'] != "") {
    $tmp_logo = $_FILES['logo']['tmp_name'];
    $logo = $_FILES['logo']['name'];
    move_uploaded_file($tmp_logo, "../../assets/books/" . $logo);
    $picture = ",`gambar`='" . $logo . "'";
}
$go = $bookmod->edit($isbn,$bookname,$writer,$price,$thickness,$description,$picture);
if($go){
    header('location:../../index.php?pilih=home&pesan=edit');
}
else{
    header('location:../../index.php?pilih=home&pesan=edit');
}
?>