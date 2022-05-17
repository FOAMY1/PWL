<?php
class Library
{
    public function __construct()
    {
    $host = "localhost";
    $dbse = "crud_pdo";
    $user = "root";
    $pass = "";
    $this ->koneksi = new PDO("mysql:host={$host};dbname={$dbse}", $user, $pass);
    }
    public function add($nama, $alamat, $logo)
    {
        $data = $this->koneksi->prepare('INSERT INTO sekolah (nama,alamat,logo) VALUES(?,?,?)');
        $data->bindParam(1, $nama);
        $data->bindParam(2, $alamat);
        $data->bindParam(3, $logo);
        $data->execute();
        return $data->rowCount();
    }
    public function show($addonq)
    {
        $hasil = $this->koneksi->prepare("SELECT * FROM sekolah" . $addonq . " ORDER BY id DESC");
        $hasil->execute();
        $data = $hasil->fetchAll();
        return $data;
    }
    public function prepareedit(){
        $hasil = $this->koneksi->prepare("SELECT * FROM sekolah WHERE `id` ='" . get('id') . "'");
        $hasil->execute();
        $data = $hasil->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function edit($id, $nama, $alamat, $update_logo){
        $simpan = $this->koneksi->prepare("UPDATE sekolah SET `nama`='" . $nama . "', `alamat`='" . $alamat . "' " . $update_logo . " WHERE `id` ='" . $id . "'");
        $simpan->execute();
        return $simpan->rowCount();
    }
    public function preparepdf(){
        $hasil = $this->koneksi->prepare("SELECT * FROM sekolah WHERE id ='" . get('id') . "'");
        $hasil->execute();
        $data = $hasil->fetch(PDO::FETCH_OBJ);
        return $data;
    }
    public function hapus($id){
        $hapus = $this->koneksi->prepare("DELETE FROM sekolah WHERE `id` ='" . $id . "'");
        $hapus->execute();
        return $hapus->rowCount();
    }
}
?>