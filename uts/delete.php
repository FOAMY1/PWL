<?php
include("koneksi.php");
$id = $_REQUEST['id'];
$query = "DELETE FROM barang WHERE kode_barang = $id";
$result = mysqli_query($conn, $query);
header("Location: view.php");
?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div>
        <form name="form" method="post" action="">
            <input type="hidden" name="new" value="1" />
            <input name="id" type="hidden" value="<?php echo $row['kode_barang']; ?>" />
        </form>
    </div>
</body>

</html>