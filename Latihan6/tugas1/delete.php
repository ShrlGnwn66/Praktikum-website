<?php
include 'config.php';

//ambil kiriman id_kategori
$NISN = $_GET['NISN'];


$delete =$conn->query("delete from siswa where NISN =$NISN");


if($delete){
    echo"<script>alert('berhasi dihapus'); window.location.href='index.php';</script>";
} else {
	echo"<script>alert('gagal dihapus'); </script>";
}
