<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="hero">
            <form action="bancoCadastro.php" method="post">
                <div class="gp1">
                <a href="./index.php"><i class="fa-sharp fa-solid fa-arrow-left"></i></a>
                    <h1>Bem-vindo <span>Cadastre-se!</span></SPAn></h1>
                </div>
                <div class="gp2">
                    <input name="email" type="email" placeholder="Email"><br>
                    <input name="senha" type="password" placeholder="Senha"><br>
                    <input name="confirmSenha" type="password" placeholder="Confirme sua Senha"><br>
                    <input type="submit" nam="submit" value="Logar">
                    <p><a href="./login.php">Já tenho uma conta!</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>