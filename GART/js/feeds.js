var upload;
function upload(){
	upload = window.open("uCommision.html", "_blank", "width=500, height=400");
}
var profil;
function profil(){
	profil = window.open("profilPengguna.php")
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