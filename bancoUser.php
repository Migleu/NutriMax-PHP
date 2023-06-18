
<?php
$servername = "localhost";
$username = "root";
$password = ""; // Senha padrão do XAMPP é vazia
$database = "nutrimax";

// Dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$dob = date('y-m-d', strtotime($_POST['dob'])); 

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Inserir os dados na tabela
$sql = "INSERT INTO tabela_logins (email, senha, nome, dob) VALUES ('$email', '$senha', '$nome', '$dob')";
if ($conn->query($sql) === TRUE) {
    header("Location: ./index.php");
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

$conn->close();
?>
