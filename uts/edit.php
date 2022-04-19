<?php
include("koneksi.php");
$id=$_REQUEST['id'];
$query = "SELECT * from barang where kode_barang='".$id."'"; 
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
<p><a href="view.php">Dashboard</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$nama =$_REQUEST['nama'];
$harga = $_REQUEST['harga'];
$jml_barang = $_REQUEST["jml_stock"];
$gambar = $_REQUEST["gambar"];
$update="update barang set nama='".$nama."', jml_stock='".$jml_barang."',
harga='".$harga."',gambar='".$gambar."' where kode_barang='".$id."'";
mysqli_query($conn, $update);
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['kode_barang'];?>" />
<p><input type="text" name="nama" placeholder=" Enter Nama" 
required value="<?php echo $row['nama'];?>" /></p>
<p><input type="text" name="harga" placeholder= "Enter harga" 
required value="<?php echo $row['harga'];?>" /></p>
<p><input type="text" name="jml_stock" placeholder="Enter jumlah" 
required value="<?php echo $row['jml_stock'];?>" /></p>
<p><input type="text" name="gambar" placeholder="Enter kode gambar" 
required value="<?php echo $row['gambar'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>