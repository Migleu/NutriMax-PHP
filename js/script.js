// 'use strict'

// let photo = document.getElementById('imgPhoto');
// let file = document.getElementById('flImage');

// photo.addEventListener('click', () => {
//     file.click();
// });

// file.addEventListener('change', () => {

//     if (file.files.length <= 0) {
//         return;
//     }

//     let reader = new FileReader();

//     reader.onload = () => {
//         photo.src = reader.result;
//     }

//     reader.readAsDataURL(file.files[0]);
// });

function nutricionistaPopup() {
  document.getElementById("popupNutri").style.display = "block";
  document.getElementById("container_tudo").style.filter = "blur(5px)";
}


function abrirDieta() {
  document.getElementById("meuPopup").style.display = "block";

  var h2 = "Sobre Dieta:";
  document.getElementById("h2Sobre").innerHTML = h2;

  var p = "A dieta é uma dieta";
  document.getElementById("pSobre").innerHTML = p;
}

function abrirIA() {
  document.getElementById("meuPopup").style.display = "block";

  var h2 = "Sobre IA:";
  document.getElementById("h2Sobre").innerHTML = h2;

  var p = "A IA é uma IA";
  document.getElementById("pSobre").innerHTML = p;
}

function abrirCalendario() {
  document.getElementById("meuPopup").style.display = "block";

  var h2 = "Sobre Calendario:";
  document.getElementById("h2Sobre").innerHTML = h2;

  var p = "O Calendario é um Calendario";
  document.getElementById("pSobre").innerHTML = p;
}

function fecharPopup() {
  document.getElementById("meuPopup").style.display = "none";
}

function fecharPopupNutri() {
  document.getElementById("popupNutri").style.display = "none";
  document.getElementById("container_tudo").style.filter = "blur(0px)";
}
