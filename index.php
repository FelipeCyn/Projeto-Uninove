<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="img/logo.png">
    <title>Hardware and Tech's</title>
</head>

<body>
    <!-- CABEÇALHO -->
    <header class="cabecalho ">
        <a href="">
            <img class="img-logo " src="img/logo.png" alt="Logo da empresa">
        </a>
        <button class="btn-menu"><i class="fa fa-bars fa-lg"></i></button>
        <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>
            <ul class="nav">

                <li><a href="#">Home</a></li>
                <li><a href="iot.html">IoT</a></li>
                <li><a href="oac.html">Org. e Arquitetura</a></li>
                <li><a href="redes.html">Redes</a></li>
                <li><a href="Operacional.html">Sis. Operecional</a></li>
                <li class="sub-menu">
                    <a>Opções⤵</a>
                    <ul>
                        <li><a href="contato.html">Contato</a></li>
                        <li><a href="sobre.html">Sobre</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <!-- CORPO DO SITE -->
    <div class="container">
        <div class="card">
            <div class="titulo">
                <h1 class="saudacao">Bem Vindos(a) à Hardware and Tech's</h1>
                <h2 class="sub-titulo">Realize seu cadastro para começar a cursar!!!</h2>

                <a href="php/cadastro.php">
                    <button class="btn" type="button">Sign up</button>
                </a>

                <p>ou faça login com a sua conta!</p>

                <a href="php/login.php">
                    <button class="btn" type="button">Login</button>
                </a>

            </div>
            <img class="img" src="img/logo.png" alt="Logo Empresarial">
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
                <p>Copyright &copy;2021 Hardware And Tech's. Designed by <span>Vinicius Alves de Moraes</span></p>
            </div>
        </footer>
    </div>

    <!-- SCRIPT JQUERY -->
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/menu.js"></script>

</body>

</html>