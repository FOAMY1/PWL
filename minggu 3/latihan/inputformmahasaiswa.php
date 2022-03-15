<html>
<head><title>Form Mahasiswa</title></head>
<body>
<FORM ACTION="prosesformmahasiswa.php" METHOD="POST" NAME="input">
    <p>NIM : </p>
    <input type="text" name="nim"><br>
    <p>Program Studi : </p>
    <select name="prodi">
    <option value="prodi1">A11</option>
    <option value="prodi2">A12</option>
    <option value="prodi3">A22</option>
    </select><br>
    <p>Nilai Tugas : </p> <input type="number" name="tugas" min = "0" max="100"><br>
    <p>Nilai UTS : </p> <input type="number" name="uts" min = "0" max="100"><br>
    <p>Nilai UAS : </p> <input type="number" name="uas" min = "0" max="100"><br>
    <p>Catatan Khusus</p>
    <input type="checkbox" name="catatan01" value="Kehadiran >= 70 %">
    Kehadiran >= 70 %<br>
    <input type="checkbox" name="catatan02" value="Interaktif dikelas">
    interaktif dikelas<br>
    <input type="checkbox" name="catatan03" value="Tidak terlambat mengumpulkan tugas">Tidak terlambat mengumpulkan tugas<br>
    <br><input type="submit" name="Pilih" value="Simpan">
</FORM>
</body>
</html>