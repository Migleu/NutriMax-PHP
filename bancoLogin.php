<?php
$servername = "localhost";  // Nome do servidor do banco de dados (no caso do XAMPP, geralmente é "localhost")
$username = "root";         // Nome de usuário do banco de dados
$password = "";
$dbname = "nutrimax";         // Nome do banco de dados


// Criar uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter os valores dos campos enviados via formulário POST
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta SQL para verificar as credenciais de login
$sql = "SELECT * FROM tabela_login WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

// Verificar se há resultados da consulta
if ($result->num_rows == 1) {
    session_start();
    $_SESSION['logged_in'] = true;
    // Login válido, redirecionar para a página desejada
    header("Location: index.php");
    exit(); // Certifique-se de sair do script após o redirecionamento
} else {
    // Credenciais inválidas, exibir mensagem de erro ou redirecionar para outra página
    echo "Credenciais de login inválidas.";
}

// Fechar a conexão
$conn->close();
?>

<!-- $sqlDados = "INSERT INTO tabela_logins (email, senha, nome, sobrenome, nome_mae, nome_pai, cpf) VALUES ('$email', '$senha', '$nome', '$sobrenome', '$nomeMae', '$nomePai', '$cpf')"; -->