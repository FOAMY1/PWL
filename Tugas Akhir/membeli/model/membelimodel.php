<?php
error_reporting(E_ERROR | E_PARSE);
include_once '../../sql.php';
include_once '../sql.php';
include_once 'sql.php';

class membelimod extends sql{
    function add ($username,$isbn,$pembayaran,$kuantitas){
        $data = $this->conn()->prepare('INSERT INTO membeli (isbn, username, pembayaran, kuantitas) VALUES(?,?,?,?)');
        $data->bindParam(1, $isbn);
        $data->bindParam(2, $username);
        $data->bindParam(3, $pembayaran);
        $data->bindParam(4, $kuantitas);
        $data->execute();
        return $data->rowCount();
    }
    function selectall($exist){
        $query =  "select * from `membeli`".$exist."";
        $stmt = $this->conn()->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    function edit($idbeli,$command){
        $update = $this->conn()->prepare("UPDATE `membeli` SET ".$command." WHERE `nobeli`='".$idbeli."'");
        $update->execute();
        return $update->rowCount();
    }
    function selectjoin($select){
        $query = "SELECT * FROM membeli INNER JOIN buku ON membeli.isbn = buku.isbn ".$select."";
        $stmt = $this->conn()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    public function hapus($id){
        $hapus = $this->conn()->prepare("DELETE FROM membeli WHERE `nobeli` ='" . $id. "'");
        $hapus->execute();
        return $hapus->rowCount();
    }
}
?>