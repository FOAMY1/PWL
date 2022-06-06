<?php
include_once '../model/membelimodel.php';
$membelimodel = new membelimod();
$username = $_POST['username'];
$isbn = $_POST['isbn'];
$pembayaran = $_POST['payment'];
$kuantitas = (int)$_POST['quantity'];
$state = $membelimodel->selectall("where isbn = '".$isbn."' and username = '".$username."'");
$data = $state->fetchAll();
$row = $state->rowCount();
if($row > 0){
    foreach($data as $key){
        $kuantitas = $kuantitas + $key['kuantitas'];
        $command = "`pembayaran`='" . $pembayaran . "',`kuantitas`='".$kuantitas."'";
        $log = $membelimodel->edit($key['nobeli'],$command);
    }
}
else{
    $log = $membelimodel->add($username,$isbn,$pembayaran,$kuantitas);
}
if($log){
    header('location:../../index.php?pilih=mycart');
}
?>