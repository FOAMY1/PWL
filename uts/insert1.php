<?php
include("koneksi.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $nama =$_REQUEST['nama'];
    $email = $_REQUEST['email'];
    $telp = $_REQUEST['telp'];
    $password = $_REQUEST['password'];
    $peran = $_REQUEST["peran"];
    $ins_query="INSERT INTO `user`(`nama`, `email`, `telp`, `password`, `peran`) VALUES ('$nama','$email','$telp','$password','$peran')";
    mysqli_query($conn,$ins_query);
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="user1.php">Dashboard</a> 
| <a href="view1.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="nama" placeholder="Enter Name" required /></p>
<p><input type="text" name="telp" placeholder="Enter telepon" required /></p>
<p><input type="text" name="email" placeholder="Enter email" required /></p>
<p><input type="text" name="peran" placeholder="Enter peran" required /></p>
<p><input type="password" name="password" placeholder="Enter password" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>