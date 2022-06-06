<?php
include_once 'book/model/crudbookmodel.php'; 
include_once 'conf.php';
$bookmod = new bookmod();
$search = '';
if ($_SESSION['level'] == "publisher") {
    $search = "WHERE nama_buku LIKE'%" . get('cari') . "%' and penerbit LIKE'%" . $_SESSION['login'] . "%'";
} else {
    $search = "WHERE nama_buku LIKE'%" . get('cari') . "%'";
}
?>