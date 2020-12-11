
var upload;
function upload(){
	upload = window.open("upload_pengguna.php", "_blank", "width=500, height=350");
}
var ver;
function verifikasi(){
	ver = window.open("verif.php", "_self");
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