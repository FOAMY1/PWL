<?php
session_start();
include 'conn.php';
?>
<?php
if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $query = "select * from `tb_user` where `username`=:username and `password`=:password";
    $stmt = $koneksi->prepare($query);
    $stmt->bindParam('username', $user, PDO::PARAM_STR);
    $stmt->bindValue('password', $pass, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();
    $row   = $stmt->fetch(PDO::FETCH_ASSOC);
    //periksa login
    if ($count == 1 && !empty($row)) {
        //menciptakan session
        $_SESSION['login'] = $user;
        //menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='index.php'>di sini(index.php)</a> untuk menuju ke halaman utama";
    }
} else {
?>
    <html>

    <head>
        <title>Login here...</title>
        <link rel="stylesheet" type="text/css" href="assets/css/css.css">
    </head>

    <body>
        <form action="" method="post">
            <h2>Login Here...</h2>
            Username : <input type="text" name="user"><br>
            Password : <input type="password" name="pass"><br>
            <input type="submit" name="Login" value="Log In">
        </form>
    </body>

    </html><?php } ?>