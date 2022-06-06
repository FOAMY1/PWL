<?php
error_reporting(E_ERROR | E_PARSE);
include_once 'sql.php';
include_once '../../sql.php';
include_once '../sql.php'; 
class usersmod extends sql{
    function selectall($exist){
        $query = $query = "select * from `user`".$exist."";
        $stmt = $this->conn()->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    function login($username, $password){
        $query = "select * from `user` where `username`=:username and `password`=:password";
        $stmt = $this->conn()->prepare($query);
        $stmt->bindParam('username', $username, PDO::PARAM_STR);
        $stmt->bindParam('password', $password, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;
    }
    public function add($username, $password, $nama, $alamat, $logo, $level)
    {
        $data = $this->conn()->prepare('INSERT INTO user (username, password, nama, alamat, logo, level) VALUES(?,?,?,?,?,?)');
        $data->bindParam(1, $username);
        $data->bindParam(2, $password);
        $data->bindParam(3, $nama);
        $data->bindParam(4, $alamat);
        $data->bindParam(5, $logo);
        $data->bindParam(6, $level);
        $data->execute();
        return $data->rowCount();
    }
    public function edit($username,$password,$nama,$alamat,$logo){
        $update = $this->conn()->prepare("UPDATE `user` SET `username` ='".$username."',`password`='".$password."',`nama`='".$nama."',
        `alamat`='".$alamat."'".$logo." WHERE `username`='".$username."'");
        $update->execute();
        return $update->rowCount();
    }
    public function hapus($username){
        $hapus = $this->conn()->prepare("DELETE FROM user WHERE `username` ='" . $username . "'");
        $hapus->execute();
        return $hapus->rowCount();
    }
}
?>