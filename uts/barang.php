<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styling.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container2">
            <div class="backhome">
                <div class="isi-contact">
                    <?php
                    session_start();
                    include 'koneksi.php';
                    $result = mysqli_query($conn,"SELECT * FROM barang");

                    echo "<table border='1'>
                    <tr>
                    <th>Nama Barang </th>
                    <th>Harga</th>
                    </tr>";
                    
                    while($row = mysqli_fetch_array($result))
                    {
                    echo "<tr>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['harga'] . "</td>";
                    echo "</tr>";
                    }
                    echo "</table>";
                    
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>