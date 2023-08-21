document.addEventListener("DOMContentLoaded", function() {
    const btnCadastrar = document.getElementById("btn-cadastrar");
    btnCadastrar.addEventListener("click", function() {
        const nome = document.querySelector(".form-register input[name='nome']").value;
        const email = document.querySelector(".form-register input[name='email']").value;
        const senha = document.querySelector(".form-register input[name='senha']").value;

        let campoEmBranco = "";

        // Verificar se algum campo está em branco
        if (nome === "") {
            campoEmBranco = "nome";
        } else if (email === "") {
            campoEmBranco = "email";
        } else if (senha === "") {
            campoEmBranco = "senha";
        }

        // Se todos os campos estiverem em branco, exibir mensagem específica
        if (campoEmBranco === "nome" && email === "" && senha === "") {
            alert("Todos os campos estão em branco. Preencha todos corretamente para continuar.");
            return; // Não envie a solicitação se todos os campos estiverem em branco
        }

        // Se algum campo estiver em branco, exibir mensagem de erro
        if (campoEmBranco !== "") {
            alert(`O campo "${campoEmBranco}" está vazio. Preencha todos os campos.`);
            return; // Não envie a solicitação se algum campo estiver em branco
        }

        // Fazer uma solicitação ao servidor para inserir os dados no banco
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "bancoCadastro.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                console.log(xhr.responseText);
                if (xhr.status === 200) {
                    if (xhr.responseText === "success") {
                        alert("Cadastro realizado com sucesso!");
                    } else {
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