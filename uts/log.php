<?php

session_start();
include 'koneksi.php';
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    if (empty($uname)) {
        header("Location: login.php?error=Username is required");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE nama = '$uname' AND password = '$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['nama'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['telp'] = $row['telp'];
                $_SESSION['peran'] = $row['peran'];
                $_SESSION['kode_user'] = $row['kode_user'];
                header("Location:trus.php");
                exit();
            } else {
                header("Location:index.php?error=Incorect Username or password");
                exit();
            }
        } else {

            header("Location:index.php?error=Incorect Username or password");

            exit();
        }
    }
} else {
    header("Location:index.php");
    exit();
}
