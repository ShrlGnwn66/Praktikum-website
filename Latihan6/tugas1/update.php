<?php 
include 'config.php';
 ?>

 <?php 

$NISN = $_GET['NISN'];
$tampil = $conn->query("select * from siswa where NISN=$NISN");
foreach ($tampil as $baris) {
	
?>
  <form method="POST">
    <fieldset>
  	<label>Nama</label>
  	<input type="text" name="Nama" value="<?=$baris['Nama']?>">
  	<br>
  	<label>Tanggal lahir</label>
  	<input type="text" name="Tanggal_lahir" value="<?=$baris['Tanggal_lahir']?>">
  	<br>
  	<label>alamat</label>
  	<input type="text" name="alamat" value="<?=$baris['alamat']?>">
  	<br>
  	<label>Jenis_kelamin</label>
  	<input type="text" name="Jenis_kelamin" value="<?=$baris['Jenis_kelamin']?>">
  	<br>
  	<button type="submit" name="ubah">simpan</button>
    </fieldset>
  </form>
  <?php } ?>

<?php 
if (isset($_POST['ubah'])) {
$Nama = $_POST['Nama'];
$Tanggal_lahir = $_POST['Tanggal_lahir'];
$alamat = $_POST['alamat'];
$Jenis_kelamin = $_POST['Jenis_kelamin'];

$ubah = $conn->query("update siswa set Nama = '$Nama',
									 Tanggal_lahir = '$Tanggal_lahir',
									 alamat = '$alamat',
									 Jenis_kelamin = '$Jenis_kelamin'
                                     where NISN = $NISN
									 ");

if ($ubah) {
	echo"<script>alert('berhasil diubah');window.location.href='index.php';</script>";
	}else{
	echo"<script>alert('gagal diubah');window.location.href='index.php';</script>";
	}

}
   ?>