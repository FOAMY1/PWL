<?php
include_once '../model/membelimodel.php';
$membelimodel = new membelimod();
$kuantitas = (int)$_POST['kuantitas'];
$id = $_POST['id'];
$operator = $_POST['operator'];
if ($operator == "+") {
    $kuantitas = $kuantitas + 1;
    $command = "`kuantitas`='" . $kuantitas . "'";
    $log = $membelimodel->edit($id, $command);
} else {
    if ($kuantitas != 1) {
        $kuantitas = $kuantitas - 1;
        $command = "`kuantitas`='" . $kuantitas . "'";
        $log = $membelimodel->edit($id, $command);
    } else {
        $log = $membelimodel->hapus($id);
    }
}
if ($log) {
    header('location:../../index.php?pilih=mycart');
}
