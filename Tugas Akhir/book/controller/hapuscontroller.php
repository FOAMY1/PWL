<?php
include_once '../model/crudbookmodel.php';
$hapus = new bookmod();
$log = $hapus->hapus($_POST['id']);
if ($log){
    header('location:../../index.php?pilih=home&pesan=hapus');
}
?>