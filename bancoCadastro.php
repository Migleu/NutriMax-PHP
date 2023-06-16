<?php
$servername = "localhost";  // Nome do servidor do banco de dados (no caso do XAMPP, geralmente é "localhost")
$username = "root";  // Nome de usuário do banco de dados
$password = "";
$dbname = "nutrimax"; // Nome do banco de dados

$email = $_POST['email']; 
$senha = $_POST['senha']; 
$confirmSenha = $_POST['confirmSenha']; 

// if (!empty($nome) && !empty($sobrenome) && !empty($nomeMae) && !empty($CPF) && !empty($email) && !empty($senha)) {

// Criar uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter o valor do email a ser inserido

// Preparar a consulta SQL para inserção
$sql = "INSERT INTO tabela_logins (email, senha)
        VALUES ('$email', '$senha')";


// Executar a consulta
if ($conn->query($sql) === TRUE) {
    echo "Email inserido com sucesso no banco de dados.";
} else {
    echo "Erro ao inserir email no banco de dados: " . $conn->error;
}

// } else {
//     echo "Todos os campos devem ser preenchidos.";
// }

// Fechar a conexão
$conn->close();


?>
