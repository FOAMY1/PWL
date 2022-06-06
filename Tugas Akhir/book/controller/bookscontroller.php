<?php
include_once 'book/model/crudbookmodel.php'; 
include_once 'conf.php';
$bookmod = new bookmod();
$isbn = $_POST['id'];
$search = "WHERE isbn LIKE'%" . $isbn . "%'";
$data = $bookmod->show($search);
foreach ($data as $key) {
   $uang = $key['harga'];
   $foto = $key['gambar'];
   $nama = $key['nama_buku'];
   $deskripsi = $key['deskripsi'];
   $pengarang = $key['pengarang'];
   $tebal = $key['tbl_buku'];
}
?>