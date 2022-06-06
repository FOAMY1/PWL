<?php
class sql{
    protected function conn(){
    $host = "localhost";
    $dbse = "db_tokobuku";
    $user = "root";
    $pass = "";
    $koneksi = new PDO("mysql:host={$host};dbname={$dbse}", $user, $pass);
    return $koneksi;
    }
}
?>