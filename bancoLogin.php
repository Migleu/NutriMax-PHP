<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Consulta SQL para verificar se o email e a senha correspondem
    $sql = "SELECT * FROM tabela_login WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Autenticação bem-sucedida
        echo "success";
    } else {
        // Autenticação falhou
        echo "error";
    }

    $conn->close();
}
?>