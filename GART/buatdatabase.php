<?php
include "conf/koneksi.php";

$sql = "CREATE DATABASE gart";
$q = $koneksi->query($sql);
if ($q=== TRUE){
    echo "Basisdata 'gart' sukses dibuat";
}else {
    echo "Gagal membuat basisdata 'gart'.". $koneksi->error;
}
$koneksi->close();
?>