<?php
//inisiasi nilai-nilai parameter koneksi
$namaServer = "localhost";
$namaPengguna = "root";
$password = "";
$nama_db = "gart";

$koneksi = new mysqli($namaServer, $namaPengguna, $password, $nama_db);
//memeriksa apakah koneksi sukses
if($koneksi->connect_error){
    die("Koneksi gagal: ".$koneksi->connect_error."<br>");
}
/*
echo "Koneksi sukses. <br>";
*/
date_default_timezone_set("UTC");
$koneksi -> set_charset("utf8");

?>