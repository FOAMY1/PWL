<?php
include_once 'membeli/model/membelimodel.php';
$membelimodel = new membelimod();
$user = $_SESSION['login'];
if($_SESSION['level'] == 'publisher'){
$state = $membelimodel->selectjoin("where penerbit = '".$user."' ORDER BY username DESC");
}
else{
    $state = $membelimodel->selectjoin("where username = '".$user."' ORDER BY username DESC");
}
