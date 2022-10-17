<?php 
include 'config.php';
 ?>
  <a href="index.php">>> Kembali</a>
<form action="" method="POST" enctype="multipart/form-data">
<fieldset>
  <table width="452" border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="white" style="padding: 2px" >
 	<tr>
 		<td width="113">NISN</td>
 		<td width="150"><input type="text" name="NISN" size="30" maxlength="30"></td>
 	</tr>
 	<tr>
 		<td width="113">Nama</td>
 		<td width="210"><input type="text" name="Nama" size="30" maxlength="30"></td>
 	</tr>
 	<tr>
 		<td width="113">Tanggal lahir</td>
 		<td width="220"><input type="text" name="Tanggal_lahir" size="30" maxlength="30"></td>
 	</tr>
	<tr>
 		<td width="113">alamat</td>
 		<td width="220"><input type="text" name="alamat" size="30" maxlength="30"></td>
 	</tr>
	<tr>
 		<td width="113">Jenis Kelamin</td>
 		<td width="220"><input type="text" name="Jenis_kelamin" size="30" maxlength="30"></td>
 	</tr>
 	<tr>
		 <td></td>
 		<td><input type="submit" name="simpan" value="SIMPAN">  <input type="reset" value="BATAL"></td>
 		<td></td>
 	</tr>
  </table>
</fieldset>
</form>

 <?php 
if (isset($_POST['simpan'])) {
$NISN = $_POST['NISN'];
$Nama = $_POST['Nama'];
$Tanggal_lahir = $_POST['Tanggal_lahir'];
$alamat = $_POST['alamat'];
$Jenis_kelamin = $_POST['Jenis_kelamin'];

$tambah = $conn->query("INSERT INTO siswa values('$NISN','$Nama','$Tanggal_lahir','$alamat','$Jenis_kelamin')");

if ($tambah) {
	echo"<script>alert('berhasil ditambah');window.location.href='index.php';</script>";
	}else{
	echo"<script>alert('gagal ditambah');window.location.href='index.php';</script>";
	}
}
  ?>