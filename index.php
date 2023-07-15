<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // O usuário está logado, mostrar conteúdo após o login
?>

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
               <li id="inicio" onclick="inicio()"><a href="#">Inicio</a></li>
               <li id="nutri" onclick="nutricionista()"><a href="#">Nutricionista</a></li>
               <li id="calendario" onclick="calendario()"><a href="#">Calendario</a></li>
               <li><a href="">Dietas</a></li>
            </ul>
        </div>
        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        
        <div class="max-width">
        <div class="imageContainer">
            <img src="camera.png" alt="" id="imgPhoto">
        </div>
    </div>
    <input type="file" id="flImage" name="fImage" accept="image/*">


    </nav>

    <main class="main" id="main">
        <div class="inicio">
            <h1>Use nosso site para <span>organizar sua vida Fitness!</span></h1>
            <p>Saiba mais sobre:</p>
            <div class="elementos">
                <div class="elemento">
                    <p>Minha dieta</p>
                </div>

                <div class="elemento">
                    <p>Nutricionista IA</p>
                </div>

                <div class="elemento">
                    <p>Meu calendario</p>
                </div>
            </div>
        </div>
    </main>

<script src="./js/lincagens.js"></script><script src="./js/script.js"></script>
 
</body>
</html> 

<?php
    // Feche a sessão
    session_unset();
    session_destroy();
} else {

?>
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
               <li id="inicio" onclick="inicio()"><a href="#">Inicio</a></li>
               <li id="nutri" onclick="nutricionista()"><a href="#">Nutricionista</a></li>
               <li id="calendario" onclick="calendario()"><a href="#">Calendario</a></li>
               <li><a href="">Dietas</a></li>
            </ul>
        </div>
        <div class="btn">
            <a  href="./Login_Cadastro/login.php"><button class="login">Login</button></a>
            <a href="./Login_Cadastro/cadastro.php"><button class="cadastro">Cadastro</button></a> 
        </div>

    </nav>

    <main class="main" id="main">
        <div class="inicio">
            <h1>Use nosso site para <span>organizar sua vida Fitness!</span></h1>
            <p>Saiba mais sobre:</p>
            <div class="elementos">
                <div class="elemento">
                    <p>Minha dieta</p>
                </div>

                <div class="elemento">
                    <p>Nutricionista IA</p>
                </div>

                <div class="elemento">
                    <p>Meu calendario</p>
                </div>
            </div>
        </div>
    </main>

<script src="./js/lincagens.js"></script><script src="./js/script.js"></script>
    
    
</body>
</html> 


<?php
}
?>
