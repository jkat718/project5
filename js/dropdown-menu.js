
function myFunction(ident) {
  document.getElementById(ident).classList.toggle("show");
}
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var elements = document.getElementsByClassName("dropbtn");
    for (var i = 0, len = elements.length; i<len; i++){
      if (elements[i].classList.contains('show')) {
        elemments[i].classList.remove('show');
      }
    }
  }
}