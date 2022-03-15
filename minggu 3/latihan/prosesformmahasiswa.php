<!DOCTYPE html>
<html>

<head></head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <?php
    ini_set('display_errors', 0);
    if (isset($_POST['Pilih'])) {
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $nilaiakhir = ($tugas * 0.4) + ($uas * 0.3) + ($uts * 0.3); ?>
        <table style="width:100%">
            <tr>
                <th>Program Studi</th>
                <th>NIM</th>
                <th>Nilai Akhir</th>
                <th>Status</th>
                <th>Catatan Khusus</th>
            </tr>
            <tr>
                <td><?php
                    if ($prodi == "prodi1") {
                        echo "<b>Teknik Informatika S1</b><br><br>";
                    }
                    if ($prodi == "prodi2") {
                        echo "<b>Sistem Informasi S1</b><br><br>";
                    }
                    if ($prodi == "prodi3") {
                        echo "<b>Teknik Informatika D3</b><br><br>";
                    }
                    ?></td>
                <td><?php
                    echo "<b>$nim</b><br><br>";
                    ?></td>
                <td><?php
                    echo "<b>$nilaiakhir</b><br><br>";
                    ?></td>
                <td>
                    <?php
                    if ($nilaiakhir < 60) {
                        echo "<b>TIDAK LULUS</b><br><br>";
                    } else {
                        echo "<b>LULUS</b><br><br>";
                    }
                    ?>
                </td>
                <td>
                <?php
                if (isset($_POST['catatan01'])) {
                    echo "<b> " . $_POST['catatan01'] . "</b><br>";
                }
                if (isset($_POST['catatan02'])) {
                    echo "<b> " . $_POST['catatan02'] . "</b><br>";
                }
                if (isset($_POST['catatan03'])) {
                    echo "<b> " . $_POST['catatan03'] . "</b><br>";
                }
            }
                ?>
                </td>
            </tr>
        </table>
</body>

</html>