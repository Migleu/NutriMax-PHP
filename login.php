<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/324b71f187.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="shortcut icon" href="./img/apple_icon.png" type="image/x-icon">
    <script src="./js/login.js" defer></script>
    <title>Login -Faça parte do nosso grupo</title>
</head>
<body>
    <main>
        <div class="login-container" id="login-container">
            <div class="form-container">
                <form class="form form-login" action="bancoLogin.php" method="post">
                    <a href="./">Voltar</a>
                    <h2 class="form-title">Entrar com</h2>
                    <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <p class="form-text">ou utilize sua conta</p>
                    <div class="form-input-container">
                        <input name="email" type="email" class="form-input" placeholder="Email">
                        <input name="senha" type="password" class="form-input" placeholder="Senha">
                    </div>
                    <a href="#" class="form-link">Esqueceu a senha?</a> 
                    <button type="button" class="form-button" id="btn-login">Logar</button>
                    <p class="mobile-text">
                        Não tem conta?
                        <a href="#" id="open-register-mobile">Registre-se</a>
                    </p>
                </form>
                <form class="form form-register">
                    <a href="./">Voltar</a>
                    <h2 class="form-title">Criar Conta</h2>
                    <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <p class="form-text">ou cadastre seu email</p>
                    <div class="form-input-container">
                        <input name="nome" type="text" class="form-input" placeholder="Nome">
                        <input name="email" type="email" class="form-input" placeholder="Email">
                        <input name="senha" type="password" class="form-input" placeholder="Senha">
                    </div>
                    <button type="button" class="form-button" id="btn-cadastrar">Cadastrar</button>
                    <p class="mobile-text">
                        Já tem conta?
                        <a href="#" id="open-login-mobile">Login</a>
                    </p>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <h2 class="form-title form-title-light">Já tem conta?</h2>
                    <p class="form-text">Faça o login em sua conta ja existente</p>
                    <button class="form-button form-button-light" id="open-login">Entrar</button>
                </div>
                <div class="overlay">
                    <h2 class="form-title form-title-light">Ops!</h2>
                    <p class="form-text">Cadastre-se e tenha acesso a todos os beneficios do nosso site</p>
                    <button class="form-button form-button-light" id="open-register">Cadastrar</button>
                </div>
            </div>
        </div>
    </main>
    <script src="./js/login.js"></script>
    <script src="./js/cadastro.js"></script>
</body>
</html>