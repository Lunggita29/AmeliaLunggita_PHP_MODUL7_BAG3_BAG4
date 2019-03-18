<?php

include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";

$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html> 
<html>
<h1>Tambah Data Matakuliah</h1>
<body>
<form action="create.php" method="POST">
<!-- form field di sini -->
<label>Kode :</label>
<input type="text" name="kode" />
<br>
<br>
<label>Matakuliah :</label>
<input type="text" name="nama_matkul" />
<br>
<br>
<label>SKS :</label>
<input type="text" name="sks" />
<br>
<br>
<label>Semester :</label>
<input type="text" name="semester" />
<br>
<br>

<label>Dosen Pengajar :</label>
<select name="id_dosen" id="nama_dosen">
<option value="NULL">--Pilih Salah Satu--</option>

<?php

while($data = mysqli_fetch_assoc($result)) {
?>
<option value="<?php echo $data['id_dosen']; ?>">
    <?php echo $data['nama_dosen']; ?>
</option>
<?php
}
?>

</select>
<br>
<br>
<input type="submit" name="btnSimpan" value="Simpan" />

</form>
</body>
</html>