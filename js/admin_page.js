function urlFind(name, url) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"), results = regex.exec(url);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
var title, subtitle, text;
function fntitle() {
    title = document.getElementById("id_title").value;
    document.getElementById("lam_title").value = urlFind("family", title);
    console.log(document.getElementById("lam_title").value = urlFind("family", title));
    console.log(title);
}
function fnsubtitle() {
    subtitle = document.getElementById("id_subtitle").value;
    document.getElementById("lam_subtitle").value = urlFind("family", subtitle);
    console.log(document.getElementById("lam_subtitle").value = urlFind("family", subtitle));
    console.log(subtitle);
}
function fntext() {
    text = document.getElementById("id_text").value;
    document.getElementById("lam_text").value = urlFind("family", text);
    console.log(document.getElementById("lam_text").value = urlFind("family", text));
    console.log(text);
}

var modal = document.getElementById("myModal");

var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
  modal.style.display = "none";
}