<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="./img/apple_icon.png" type="image/x-icon">
    <title>NutriMax</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="index.php"><h1><i class="fa-solid fa-apple-whole"></i>NutriMax</h1></a>
        </div>
        <div class="links">
            <ul class="nav-itens">
                <li><a href="index.php">Inicio</a></li>
                <li id="nutri" onclick="nutricionista()"><a href="#">Nutricionista</a></li>
                <li id="calendario" onclick="calendario()"><a href="#">Calendario</a></li>
                <li><a href="#">Dietas</a></li>
            </ul>
        </div>
        <div class="btn">
            <a href="./login.php"><button class="login">Login</button></a>
            <a href="./cadastro.php"><button class="cadastro">Cadastro</button></a>
        </div>

    </nav>

    <div class="titulo_dieta">
        <h3>Refeições do dia</h3>
    </div>

    <div class="papiro">
        <ul class="lista_dieta">
            <li class="concluido">Refeição 1</li>
            <li>Refeição 2</li>
            <li>Refeição 3</li>
            <li>Refeição 4</li>
            <li>Refeição 5</li>
            <li>Refeição 6</li>
            <li>Refeição 7</li>
        </ul>
    </div>

    <div class="opcoes_dif">
        <h3>Opções de refeições diferentes:</h3>
    </div>

</body>

<footer>
</footer>