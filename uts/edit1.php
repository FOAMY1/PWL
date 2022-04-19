<?php
include("koneksi.php");
$id=$_REQUEST['id'];
$query = "SELECT * from user where kode_user='".$id."'"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/css.css">
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="view1.php">Dashboard</a> 
| <a href="insert1.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$nama =$_REQUEST['nama'];
$email = $_REQUEST['email'];
$telp = $_REQUEST['telp'];
$peran = $_REQUEST['peran'];
$password = $_REQUEST['password'];
$update="update user set nama='".$nama."', email='".$email."',
telp='".$telp."',peran='".$peran."',password='".$password."' where kode_user='".$id."'";
mysqli_query($conn, $update);
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['kode_user'];?>" />
<p><input type="text" name="nama" placeholder=" Enter Nama" 
required value="<?php echo $row['nama'];?>" /></p>
<p><input type="text" name="email" placeholder= "Enter email" 
required value="<?php echo $row['email'];?>" /></p>
<p><input type="text" name="telp" placeholder="Enter telpon" 
required value="<?php echo $row['telp'];?>" /></p>
<p><input type="text" name="peran" placeholder="Enter peran" 
required value="<?php echo $row['peran'];?>" /></p>
<p><input type="password" name="password" placeholder="Enter password" 
required value="<?php echo $row['password'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>