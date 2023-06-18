<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/login.css">
    <title>Usuario</title>
</head>

<body>
    <div class="container">
        <div class="hero">
            <form action="../bancoUser.php" method="post">
                <a href="../index.php"><i class="fa-sharp fa-solid fa-arrow-left"></i></a>
                <div class="gp1">
                    <i class="fa-solid fa-apple-whole"></i>
                    <h1>Otimo! <span>Já estamos quase acabando</span></span></h1>
                    <hr>
                </div>
                <div class="gp2">
                    <input name="nome" type="text" placeholder="Nome"><br>
                    <input name="dob" type="date"><br>
                    <?php
                    if (isset($_POST['email']) && isset($_POST['senha'])) {
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    echo '<input type="hidden" name="email" value="' . $email . '">';
                    echo '<input type="hidden" name="senha" value="' . $senha . '">';
        }
        ?>
                    <input type="submit" nam="submit" value="Logar">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

