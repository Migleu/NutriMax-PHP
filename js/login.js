'use strict'

const loginContainer = document.getElementById('login-container')

const moveOverlay = () => loginContainer.classList.toggle('move')

document.getElementById('open-register').addEventListener('click', moveOverlay)
document.getElementById('open-login').addEventListener('click', moveOverlay)

document.getElementById('open-register-mobile').addEventListener('click', moveOverlay)
document.getElementById('open-login-mobile').addEventListener('click', moveOverlay)




document.addEventListener("DOMContentLoaded", function() {
    const btnLogin = document.getElementById("btn-login");
    btnLogin.addEventListener("click", function() {
        const email = document.querySelector(".form-login input[name='email']").value;
        const senha = document.querySelector(".form-login input[name='senha']").value;

        // Fazer uma solicitação ao servidor para verificar as credenciais
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "bancoLogin.php", true); // Alterado para "bancoLogin.php"
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                console.log(xhr.responseText); // Mostra a resposta no console
                if (xhr.status === 200) {
                    if (xhr.responseText === "success") {
                        // Autenticação bem-sucedida, redirecionar ou fazer outras ações
                        window.location.href="index.php"; 
                    } else {
                        // Autenticação falhou
                        alert("Credenciais inválidas. Tente novamente.");
                    }
                } else {
                    alert("Ocorreu um erro ao processar a solicitação.");
                }
            }
        };
        xhr.send(`email=${email}&senha=${senha}`);
    });
});

