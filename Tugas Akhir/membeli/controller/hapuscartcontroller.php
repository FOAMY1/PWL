<?php
include_once '../model/membelimodel.php';
$membelimodel = new membelimod();
$id = $_POST['id'];
$log = $membelimodel->hapus($id);
if($log){
    header('location:../../index.php?pilih=mycart');
}