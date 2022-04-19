<?php

$nama= "localhost";
$root= "root";
$password = "";
$db_name = "db_tokoabc";
$conn = mysqli_connect($nama, $root, $password, $db_name);
if (!$conn) {
    echo "Connection failed!";
}