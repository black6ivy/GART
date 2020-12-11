<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'conf/koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$data = mysqli_fetch_assoc($result);
$id_user = $data['id_user'];
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($result);

 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION["loggedin"] = true;
	header("Location: feeds.php?id=".$id_user);

}else{
	header("location:login.php?pesan=gagal");
}

?>