<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="./img/apple_icon.png" type="image/x-icon">
    <title>NutriMax</title>
</head>
<body>
    <nav>
        <div class="logo"><h1><i class="fa-solid fa-apple-whole"></i>NutriMax</h1></div>
        <div class="links">
            <ul class="nav-itens">
               <li><a href="#">Inicio</a></li>
               <li id="nutri" onclick="nutricionista()"><a href="#">Nutricionista</a></li>
               <li id="calendario" onclick="calendario()"><a href="#">Calendario</a></li>
               <li><a href="dieta.php">Dietas</a></li>
            </ul>
        </div>
        <div class="btn">
            <a  href="./login.php"><button class="login">Login</button></a>
            <a href="./cadastro.php"><button class="cadastro">Cadastro</button></a>
        </div>

    </nav>

    <main class="main" id="main">
        <div class="inicio">
            <h1>Use nosso site para <span>organizar sua vida Fitness!</span></h1>
            <p>Saiba mais sobre:</p>
            <div class="elementos">
                <div class="elemento">
                    <a href="dieta.php"><p>Minha dieta</p></a>
                </div>

                <div class="elemento">
                    <a href="sobre_ia.php"><p>Nutricionista IA</p></a>
                </div>

                <div class="elemento">
                    <p>Meu calendario</p>
                </div>
            </div>
        </div>
    </main>

    <script src="./js/script.js"></script>
</body>
</html> 