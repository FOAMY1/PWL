<?php
include '../../conf.php';
include '../../conn.php';
$lib = new Library();
$id = get('id');
$hapus = $lib->hapus($id);
if ($hapus) {
    header("location:../../index.php?p=sekolah");
}
?>