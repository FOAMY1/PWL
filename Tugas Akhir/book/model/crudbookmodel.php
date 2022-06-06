<?php
error_reporting(E_ERROR | E_PARSE);
include_once '../../sql.php';
include_once '../sql.php';
include_once 'sql.php';
class bookmod extends sql{
    public function edit($isbn,$bookname,$writer,$price,$thickness,$description,$picture){
        $update = $this->conn()->prepare("UPDATE `buku` SET `nama_buku`='".$bookname."',`pengarang`='".$writer."',`harga`='".$price."',
        `tbl_buku`='".$thickness."',`deskripsi`='".$description."'".$picture." WHERE `isbn`='".$isbn."'");
        $update->execute();
        return $update->rowCount();
    }
    function selectall($exist){
        $query = $query = "select * from `buku`".$exist."";
        $stmt = $this->conn()->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function add($isbn, $bookname, $writer, $price, $thickness, $description, $picture, $publisher)
    {
        $data = $this->conn()->prepare('INSERT INTO buku (isbn, nama_buku, penerbit, pengarang, harga, tbl_buku, deskripsi, gambar) VALUES(?,?,?,?,?,?,?,?)');
        $data->bindParam(1, $isbn);
        $data->bindParam(2, $bookname);
        $data->bindParam(3, $publisher);
        $data->bindParam(4, $writer);
        $data->bindParam(5, $price);
        $data->bindParam(6, $thickness);
        $data->bindParam(7, $description);
        $data->bindParam(8, $picture);
        $data->execute();
        return $data->rowCount();
    }
    public function hapus($isbn){
        $hapus = $this->conn()->prepare("DELETE FROM buku WHERE `isbn` ='" . $isbn . "'");
        $hapus->execute();
        return $hapus->rowCount();
    }
    public function show($search)
    {
        $hasil = $this->conn()->prepare("SELECT * FROM buku " . $search . " ORDER BY isbn DESC");
        $hasil->execute();
        $data = $hasil->fetchAll();
        return $data;
    }
}

?>