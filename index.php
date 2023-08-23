<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/calendario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="./img/apple_icon.png" type="image/x-icon">
    <script src="./js/lincagens.js"></script><script src="./js/script.js"></script>
    <title>NutriMax </title>
</head>
<body>
    
<?php
    require "./componentes/navbar.php";
?>

        
    <main class="main" id="main">
        <div class="inicio">
            <h1>Use nosso site para <span>organizar sua vida Fitness!</span></h1>
            <p>Saiba mais sobre:</p>

            <div class="popup" id="meuPopup">
                <h2 id="h2Sobre">Error</h2>
                <p id="pSobre">Informação não encontrada, tente novamente.</p>
                <button id="fecharPopup" onclick="fecharPopup()">Fechar</button>
            </div>

            <div class="elementos">
                <div class="elemento" onclick="abrirDieta()">
                    <p>Minha dieta</p>
                </div>

                <div class="elemento" onclick="abrirIA()">
                    <p>Nutricionista IA</p>
                </div>

                <div class="elemento" onclick="abrirCalendario()">
                    <p>Meu calendario</p>
                </div>
            </div>
        </div>
        
        <div class="container_plano">
        <div class="plano">
            <h1><span>Atinja seus</span> objetivos com nosso site:</h1>
            <div class="balao">
                <h1>01-</h1>
                <p>Perfil de dieta para você</p>
            </div>
            <div class="balao">
                <h1>02-</h1>
                <p>Preparação de uma refeição rápida</p>
            </div>
            <div class="balao">
                <h1>03-</h1>
                <p>Desenhado para si</p>
            </div>
            <div class="balao">
                <h1>04-</h1>
                <p>Desenhado para si</p>
            </div>
        </div>
        <div class="img">
            <img src="https://cdn-icons-png.flaticon.com/512/5223/5223176.png" alt="">
        </div>
        </div>
        <hr id="hr">
        <div class="container_programa">
            <div class="programa_titulo">
                <h1>Metodologia NutriMax</h1>
            </div>
            <div class="programa_subtitulo">
                <p>Deixe no passado as tentativas frustradas de ser mais saudável,
                    as dietas mirabolantes e os treinos sem resultados.
                    Confira como funcionam os programas do NutriMax.
                </p>
            </div>
            <div class="programa">
                <div class="programa_elementos">
                    <img src="https://cdn-icons-png.flaticon.com/512/815/815128.png" alt="">
                    <h1>Sem desafios dolorosos</h1>
                    <p>Metodologias e programas são desenvolvidos por uma IA especialista focada em tirar o corpo da estagnação, melhor nutrição, reprogramar o corpo para queimar mais gordura e transformá-la em massa magra.</p>
                </div>
                <div class="programa_elementos">
                    <img src="https://cdn-icons-png.flaticon.com/512/977/977451.png" alt="">
                    <h1>Chegue no seu objetivo</h1>
                    <p>Metodologias e programas são desenvolvidos por uma IA especialista focada em tirar o corpo da estagnação, melhor nutrição, reprogramar o corpo para queimar mais gordura e transformá-la em massa magra.</p>
                </div>
                <div class="programa_elementos">
                    <img src="https://cdn-icons-png.flaticon.com/256/606/606534.png" alt="">
                    <h1>melhore seu jeito de viver</h1>
                    <p>Metodologias e programas são desenvolvidos por uma IA especialista focada em tirar o corpo da estagnação, melhor nutrição, reprogramar o corpo para queimar mais gordura e transformá-la em massa magra.</p>
                </div>
            </div>
            <button id="programa_btn">Conheça nossos programas</button>
        </div>
        
        <div class="container_feedback">
            <h2>Observe alguns Feedbacks feitos para nosso site!</h2>
            <div class="feedback">
                <div class="feedback_elemento">
                    <div class="feedback_user">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="">
                        <h3>Roger Santos</h3>
                    </div>
                    <p>Muito bom!! Consegui resultados incriveis em poucos dias.</p>
                    <img id="stars" src="https://www.tecnonutri.com.br/campanha/15em3/img/tecnonutri/fivestars.png" alt="">
                </div>
                <div class="feedback_elemento">
                    <div class="feedback_user">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="">
                        <h3>Roger Santos</h3>
                    </div>
                    <p>Muito bom!! Consegui resultados incriveis em poucos dias.</p>
                    <img id="stars" src="https://www.tecnonutri.com.br/campanha/15em3/img/tecnonutri/fivestars.png" alt="">
                </div>
                <div class="feedback_elemento">
                    <div class="feedback_user">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="">
                        <h3>Roger Santos</h3>
                    </div>
                    <p>Muito bom!! Consegui resultados incriveis em poucos dias.</p>
                    <img id="stars" src="https://www.tecnonutri.com.br/campanha/15em3/img/tecnonutri/fivestars.png" alt="">
                </div>
                <div class="feedback_elemento">
                    <div class="feedback_user">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="">
                        <h3>Roger Santos</h3>
                    </div>
                    <p>Muito bom!! Consegui resultados incriveis em poucos dias.</p>
                    <img id="stars" src="https://www.tecnonutri.com.br/campanha/15em3/img/tecnonutri/fivestars.png" alt="">
                </div>
            </div>
        </div>
    </main>

</body>
<footer>
<div id="footer_content">
            <div id="footer_contacts">
                <h1><i class="fa-solid fa-apple-whole"></i>NutriMax</h1>
                <p>entre em contato conosco.</p>

                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            
            <ul class="footer-list">
                <li>
                    <h3>Blog</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Tech</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Adventures</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Music</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Products</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">App</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Desktop</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Cloud</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Subscribe</h3>

                <p>
                    Envie uma mensagem em nosso email, digite a mensagem abaixo
                </p>

                <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="footer_copyright">
            <h3>&#169 2023</h3> 
        </div>
</footer>
</html> 

