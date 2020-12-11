<!DOCTYPE html>
<html>
<head>
	<title>Feeds</title>
	<link rel="stylesheet" type="text/css" href="feeds.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="feeds.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>
	<div class="grid-container">
		<header>
			<div class="gart"><strong>GART</strong></div>
			<div class="cari"><input type="text" name="cari" placeholder="Cari"></div>
			<div class="dropdown">
  				<button onclick="myFunction()" class="dropbtn">Notifikasi</button>
  					<div id="myDropdown" class="dropdown-content">
    					<a href="#">
    						<tr>
								<td><label><strong>Thalia </strong>menyukai postingan anda</label></td>					
							</tr>
						</a>
    					<a href="#">
    						<tr>
								<td><label><strong>Ayya </strong>menyukai postingan anda</label></td>						
							</tr>
						</a>
    					<a href="#">
    						<tr>
								<td><label><strong>Rifqi </strong>mengomentari postingan anda</label></td>
							</tr>
						</a>
  					</div>
			</div>
			<div><button onclick="profil()" class="notif"><img src="profil.png" width="30" > </button></div>
		</header>
	</div>
		<main>
			<div class="container">
				<div class="title">
					<h3>For You</h3>
				</div>
				<div class="row"> 
  					<div class="column">
    						<img src="image/g4.jpg" style="width: 100%">
    						<img src="image/t5.jpg" style="width: 100%">
   							<img src="image/g6.jpg" style="width: 100%">
    						<img src="image/g22.jpg" style="width: 100%">
    						<img src="image/g7.jpg" style="width: 100%">
   							<img src="image/g8.jpg" style="width: 100%">
  					</div>
  					<div class="column">
    						<img src="image/g12.jpg" style="width: 100%">
    						<img src="image/g10.jpg" style="width: 100%">
    						<img src="image/g11.jpg" style="width: 100%">
    						<img src="image/g9.jpg" style="width: 100%">
    						<img src="image/g13.jpg" style="width: 100%">
    						<img src="image/g20.jpg" style="width: 100%">
  					</div> 
    				<div class="column">
    						<img src="image/g17.jpg" style="width: 100%">
    						<img src="image/g16.jpg" style="width: 100%">
    						<img src="image/g15.jpg" style="width: 100%">
    						<img src="image/g18.jpg" style="width: 100%">
    						<img src="image/g19.jpg" style="width: 100%">
    						<img src="image/g14.jpg" style="width: 100%">
  					</div> 
    				<div class="column">
    						<img src="image/t2.jpg" style="width: 100%">
   							<img src="image/g5.jpg" style="width: 100%">
    						<img src="image/s4.jpg" style="width: 100%">
    						<img src="image/s6.jpg" style="width: 100%">
    						<img src="image/s7.jpg" style="width: 100%">
    						<img src="image/g21.jpg" style="width: 100%">
  					</div> 
				</div><br>
	</div>
</div>
</main>
<footer><div>		
	<nav class="pagination">
        <ul>
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
           <li class="current"><strong>2</strong></li>
          <li><a href="#">3</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </nav>
  </div></footer>
</body>
</html>

<?php

include ("koneksi.php");
if (isset($_POST['submit'])){
	$_SESSION['username'] = $username;
	$result = mysqli_query($koneksi,"select * from user where username='$username'");
	$data = mysqli_fetch_assoc($result);
	header("Location:profilpengguna.php?id=".$id_user);
}
?>
<script type="text/javascript">
	function komen() {
  var x = document.getElementById("mymy");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

var profil;
function profil(){
	profil = window.open("profilPengguna.php", "_blank")
}

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>