
document.addEventListener("DOMContentLoaded", function() {
    const btnCadastrar = document.getElementById("btn-cadastrar");
    btnCadastrar.addEventListener("click", function() {
        const nome = document.querySelector(".form-register input[name='nome']").value;
        const email = document.querySelector(".form-register input[name='email']").value;
        const senha = document.querySelector(".form-register input[name='senha']").value;

        // Fazer uma solicitação ao servidor para inserir os dados no banco
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "bancoCadastro.php", true); // Alterado para "bancoCadastro.php"
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                console.log(xhr.responseText); // Mostra a resposta no console
                if (xhr.status === 200) {
                    if (xhr.responseText === "success") {
                        // Cadastro bem-sucedido, redirecionar ou fazer outras ações
                        alert("Cadastro realizado com sucesso!");
                    } else {
                        // Cadastro falhou
                        alert("Ocorreu um erro ao cadastrar. Tente novamente.");
                    }
                } else {
                    alert("Ocorreu um erro ao processar a solicitação.");
                }
            }
        };
        xhr.send(`nome=${nome}&email=${email}&senha=${senha}`);
    });
});

