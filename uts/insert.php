<?php
include("koneksi.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $nama =$_REQUEST['nama'];
    $harga = $_REQUEST['harga'];
    $jml_barang = $_REQUEST["jml_barang"];
    $gambar = $_REQUEST["gambar"];
    $ins_query="INSERT INTO `barang`(`nama`, `harga`, `gambar`, `jml_stock`) VALUES ('$nama','$harga','$gambar','$jml_barang')";
    mysqli_query($conn,$ins_query);
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/css.css">
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="barang.php">Dashboard</a> 
| <a href="view.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="nama" placeholder="Enter Name" required /></p>
<p><input type="text" name="harga" placeholder="Enter harga" required /></p>
<p><input type="text" name="jml_barang" placeholder="Enter jumlah" required /></p>
<p><input type="text" name="gambar" placeholder="Enter kode gambar" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>