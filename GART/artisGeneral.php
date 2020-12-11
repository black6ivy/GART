<?php
include 'conf/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>artist</title>
	<link rel="stylesheet" type="text/css" href="css/profileArtist.css">
	<script type="text/javascript" src="js/profilArtist.js"></script>
</head>
<body>
	<div class="grid-container">
		<header>
			<div class="gart"><strong>GART</strong></div>
			<div class="cari"><input type="text" name="cari" placeholder="Cari"  ></div>
			</header>
		</div>
	<div class="container">
		<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/ffcb41e0-7103-480c-847c-a3787b34b8d1/de5g5ke-dabf816f-3a08-45d1-87f4-b7250d527ee6.png/v1/fill/w_1095,h_730,q_70,strp/jin_sakai_by_zyuureon_de5g5ke-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD04NTQiLCJwYXRoIjoiXC9mXC9mZmNiNDFlMC03MTAzLTQ4MGMtODQ3Yy1hMzc4N2IzNGI4ZDFcL2RlNWc1a2UtZGFiZjgxNmYtM2EwOC00NWQxLTg3ZjQtYjcyNTBkNTI3ZWU2LnBuZyIsIndpZHRoIjoiPD0xMjgwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.PPFx4oUMa9aX96EH1UwwMGZNaKT2fG9lslGWhQXcwmU" 
        alt="g3.jpg" class= "image"/>
		<div class="grid-container kedua">	
			<div class="col">
				<?php 
			$query = mysqli_query($koneksi, "SELECT * FROM verif");
			while($gamb = mysqli_fetch_array($query)){
			?>	
				<div><img src="verifik/<?php echo $gamb['nama_gambar'] ?>" width="100px" height="100px" /></div>
			</div>
			<div class="user">
				<div class="username"><h2><?php echo $gamb['username'] ?></h2></div>
				<div><label><?php echo $gamb['deskripsi'] ?></label></div>
			</div>
			<?php } ?>
			<div class="chatt">
				<div><button class="chat"><strong>Chat</strong></button></div>
			</div>	
		</div>
	</div>
	<div class="container=fluid">
		<ul>
			<li><a href="#galeri"> GALERI </a></li>
			<li><a href="#belanja"> BELANJA </a></li>
			<li><a href="#donasi"> DONASI </a></li>
		</ul>
	</div>
	<div class="grid-container ketiga">
		<div class="T"> 
			<h3 id="galeri">GALERI</h3>
		</div>
			<div class="gallery-item" tabindex="0">
			<?php 
			$query = mysqli_query($koneksi, "SELECT * FROM karya");
			if (mysqli_num_rows($query) > 0) {
			while($gamb = mysqli_fetch_array($query)){
			?>		
					<img src="gambar/<?php echo $gamb['nama_file'] ?>" width="200px" height="200px" />
					<input type="button" name="like" value="Like"> 
					<input type="button" name="comment" value="comment">
					
					
				<?php }} ?>

				</div>
			<div class="T"> 
				<h3 id="belanja">BELANJA</h3>
				<div class="gallery-item" tabindex="0">
						<?php 
			$query = mysqli_query($koneksi, "SELECT * FROM karya WHERE jual = 'Ya' ");
			while($gamb = mysqli_fetch_array($query)){
			?>		
						<img src="gambar/<?php echo $gamb['nama_file'] ?>" width="200px" height="200px" >
					<?php } ?>
						</div>
					
			</div>

	<div>
		<div class="T"><h3 id="donasi">DONASI</h3></div>
		<!--<div class="te"><textarea class="text"></textarea></div>-->
				<div class="donasi">
				<form action="" method="post">
				<label class="donama">Nama : <br><input type="text" name="nama"><br></label>
				<label class="donama">Jumlah Donasi : <br><input type="number" name="jumlah"><br></label>
				<!--<input type="submit" name="kirim" value="Kirim">-->
				<button onclick="" class="btndonasi" name="kirim">Kirim</button>
				</form>
				</div>
<?php
if (isset($_POST['kirim'])) {
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];

	$insert = mysqli_query($koneksi, "INSERT INTO donasi VALUES('', '$nama', '$jumlah') ");
}
?>
<?php 
			$query = mysqli_query($koneksi, "SELECT * FROM donasi");
			if (mysqli_num_rows($query) > 0) {
			while($gamb = mysqli_fetch_array($query)){
			?>		
				<div class="donasi">
					<?php echo $gamb['nama'] ?> berdonasi sebesar RP <?php echo $gamb['jumlah'] ?>
				</div>
			<?php }} ?>
		</div>
	</div>
	<footer><div></div></footer>

</body>
</html>