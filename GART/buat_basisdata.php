<?php
include './conf/koneksi.php';
$q = $koneksi->query("CREATE DATABASE gart");
if ($q){
	echo "Sukses membuat basis data";
}else{
	echo "Gagal membuat basis data";
}
$koneksi->close();
?>