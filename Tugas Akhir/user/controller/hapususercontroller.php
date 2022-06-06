<?php
session_start();
include_once '../model/usermodel.php';
$hapus = new usersmod();
$log = $hapus->hapus($_POST['id']);
session_destroy();
if ($log){
    header('location:../../index.php?pilih=home&pesan=hapus');
}