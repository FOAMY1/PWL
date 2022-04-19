<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" type="text/css" href="css/css1.css">
</head>
<body>
<div class="form">
<p><a href="trus.php">Home</a> 
| <a href="insert1.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Nama</strong></th>
<th><strong>email</strong></th>
<th><strong>telp</strong></th>
<th><strong>peran</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from user ORDER BY kode_user desc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center" style="color:#0000ff"><?php echo $row["nama"]; ?></td>
<td align="center" style="color:#0000ff"><?php echo $row["email"]; ?></td>
<td align="center" style="color:#0000ff"><?php echo $row["telp"]; ?></td>
<td align="center" style="color:#0000ff"><?php echo $row["peran"]; ?></td>
<td align="center" style="color:#0000ff">
<a href="edit1.php?id=<?php echo $row["kode_user"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete1.php?id=<?php echo $row["kode_user"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>