// define a handler
function doc_keyUp(e) {
    // this would test for whichever key is 40 and the ctrl key at the same time
    if (e.ctrlKey && e.keyCode == 65) {
        changeContentsOFF();
    }
}
document.addEventListener('keyup', doc_keyUp, false);

function changeContents(){
    document.body.style.backgroundColor = "black";
    document.body.style.color = "red";
    document.body.style.fontSize = "30px";
    document.body.style.lineHeight="34px";
    document.body.style.letterSpacing ="2px";
    document.body.style.font = "bold 30px arial, sans-serif";
}

function doc_keyDown(e) {
    if (e.ctrlKey && e.keyCode == 65) {
        changeContents();
    }
}
document.addEventListener('keydown', doc_keyDown, false);

function changeContentsOFF(){
    document.body.style.backgroundColor = "";
    document.body.style.fontSize = "";
    document.body.style.lineHeight="";
    document.body.style.color = "";
    document.body.style.letterSpacing ="";
}


document.getElementById('assist').onclick = function changeContent() {
      document.body.style.backgroundColor = "black";
      document.body.style.color = "red";
      document.body.style.fontSize = "30px";
      document.body.style.lineHeight="34px";
      document.body.style.letterSpacing ="2px";
      document.body.style.font = "bold 30px arial, sans-serif";
}

document.getElementById('assistoff').onclick = function changeContent() {
      document.body.style.backgroundColor = "";
      document.body.style.fontSize = "";
      document.body.style.lineHeight="";
      document.body.style.color = "";
      document.body.style.letterSpacing ="";
      document.body.style.font = "";
  }
