
// function exibirHoraAtual() {
//   var agora = new Date();
//   var horas = agora.getHours().toString().padStart(2, "0");
//   var minutos = agora.getMinutes().toString().padStart(2, "0");

//   var sufixo = horas >= 12 ? "PM" : "AM";
//   horas = horas % 12;
//   horas = horas ? horas : 12; // Define 12 horas para 0

//   var horaAtual = horas + ":" + minutos + " " + sufixo;

//   var elementoHoraAtual = document.querySelector(".horas");
//   elementoHoraAtual.textContent = horaAtual;
// }

// // Chama a função exibirHoraAtual a cada segundo (1000 milissegundos)
// setInterval(exibirHoraAtual, 1000);

function enviarTexto() {
  var textoInput = document.getElementById("input-msg").value;

  // Criar elementos <p>, <br> e <span>
  var mensagem = document.createElement("p");
  var quebraLinha = document.createElement("br");
  var spanHora = document.createElement("span");

  // Configurar atributos e IDs dos elementos
  mensagem.id = "msg-you";
  spanHora.id = "hora-envio";

  // Aninhar elementos corretamente
  mensagem.appendChild(quebraLinha);
  mensagem.appendChild(spanHora);

  // Definir texto do input
  mensagem.textContent = textoInput;

  // Criar e configurar a div contendo as mensagens
  var divMensagens = document.createElement("div");
  divMensagens.className = "messages you-message";
  divMensagens.id = "mensagens";

  // Adicionar elemento <p> à div de mensagens
  divMensagens.appendChild(mensagem);

  // Adicionar div de mensagens ao contêiner principal
  var containerPrincipal = document.getElementById("chat");
  containerPrincipal.appendChild(divMensagens);

  document.getElementById("input-msg").value = ""; // Limpar o campo de entrada

  // Ajustar o scroll para exibir as mensagens mais recentes
  containerPrincipal.scrollTop = containerPrincipal.scrollHeight;
}

  
  function enviarEnter(event) {
    if (event.keyCode === 13) {
      enviarTexto();
    }
  }


'use strict'

let photo = document.getElementById('imgPhoto');
let file = document.getElementById('flImage');

photo.addEventListener('click', () => {
    file.click();
});

file.addEventListener('change', () => {

    if (file.files.length <= 0) {
        return;
    }

    let reader = new FileReader();

    reader.onload = () => {
        photo.src = reader.result;
    }

    reader.readAsDataURL(file.files[0]);
});

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

  // function enviarEnter(event) {
  //   if (event.keyCode === 13) {

  //       var textoInput = document.getElementById("input-msg").value;
        
  //       var mensagem = document.createElement("p");
  //       mensagem.innerHTML = textoInput + "</br><span id='hora-envio'></span>";
  //       mensagem.id = "msg-you";
        
  //       var horaEnvio = new Date();
  //       var spanHora = mensagem.querySelector("#hora-envio");
  //       spanHora.textContent = horaEnvio.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        
  //       document.getElementById("mensagens").appendChild(mensagem);
        
  //       document.getElementById("input-msg").value = "";

  //       // Ajustar o scroll para exibir as mensagens mais recentes
  //    containerPrincipal.scrollTop = containerPrincipal.scrollHeight;
  //     }
    
  // }




