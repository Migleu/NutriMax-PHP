<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Conexão com o banco de dados
    $servername = "localhost"; // Endereço do servidor MySQL
    $username = "root"; // Nome de usuário do banco de dados
    $password = "devisate"; // Senha do banco de dados
    $dbname = "nutrimax"; // Nome do banco de dados

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consulta SQL para inserir os dados no banco
    $sql = "INSERT INTO tabela_login (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }

    $conn->close();
}
?>
