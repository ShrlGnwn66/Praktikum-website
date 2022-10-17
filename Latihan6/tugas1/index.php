<?php 
include 'config.php';
 ?>
 <a href="tambah.php">+ Tambah</a>
 <table border="1">
 	<tr>
 		<th>NISN</th>
 		<th>Nama</th>
 		<th>Tanggal_lahir</th>
 		<th>alamat</th>
 		<th>Jenis_kelamin</th>
 		<th>Aksi</th>
 	</tr>
<?php 
$tampil = $conn->query("select * from siswa");
foreach ($tampil as $baris) {
 ?>
 	<tr>
 		<td><?=$baris['NISN']?></td>
 		<td><?=$baris['Nama']?></td>
 		<td><?=$baris['Tanggal_lahir']?></td>
 		<td><?=$baris['alamat']?></td>
 		<td><?=$baris['Jenis_kelamin']?></td>
 		<td><a href="delete.php?NISN=<?=$baris['NISN']?>">Hapus</a>
 			<a href="update.php?NISN=<?=$baris['NISN']?>">Edit</a></td>
 	</tr>
<?php } ?>
 </table>