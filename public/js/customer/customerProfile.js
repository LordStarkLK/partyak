var ori = document.getElementById("original");
var editor = document.getElementById("edit");

var eBtn = document.getElementById("editt");


eBtn.onclick = function(){
    editor.style.display="flex";
    ori.style.display="none";
}