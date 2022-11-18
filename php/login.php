<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" href="../img/logo.png">
    <title>Login</title>
</head>

<body>
    <!-- CABEÇALHO -->
    <header class="cabecalho ">
        <a href="">
            <img class="img-logo" src="../img/logo.png" alt="Logo da empresa">
        </a>
        <button type="button" class="btn-menu"><i class="fa fa-bars fa-lg"></i></button>
        <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>
            <ul class="nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
            </ul>
        </nav>
    </header>

    <!-- FORMULÁRIO -->
    <div class="row">
        <form class="formulario" action="../app/testLogin.php" method="POST">
            <h1 class="titulo">LOGIN</h1>

            <label>E-mail*</label>
            <input class="campo" type="email" name="email" placeholder="example@gmail.com" required maxlength="50">

            <label>Senha (Min 6 Caracteres)*</label>
            <input class="pass campo" type="password" name="password" placeholder="example123456" required minlength="6"
                maxlength="12">

            <input class="submit" type="submit" name="submit" value="Enviar">
        </form>
    </div>

    <!-- RODAPÉ -->
    <footer>
        <div class="footer-content">
            <h3>Hardware And Tech's</h3>
            <p>A <i> Hardware and Techs </i> é um site que contém informações sobre
                hardwares, softwares e tudo para o que você precisa para estudar direto da sua casa.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-whatsapp"> (11) 97402-3353</i></a></li>
                <li><a href="#"><i class="fa fa-facebook"> Viny Alves</i></a></li>
                <li><a href="#"><i class="fa fa-instagram"> Viny_alves02</i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy;2021 Hardware And Tech's. Designed by <span>Vinicius Alves de
                    Moraes</span>
            </p>
        </div>

        <!-- SCRIPT JQUERY -->
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="../js/menu.js"></script>
</body>

</html>