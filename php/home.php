<?php
    // inicia seção
    session_start();

    // se não existir email e senha
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
         //destruir todos os dados caso não exista
         unset($_SESSION['email']);
         unset($_SESSION['password']);
        //redireciona para:
        header('location: login.php');
    }
    else {
        //se existir login
        $logado = $_SESSION['email'];
    }
 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="icon" href="../img/logo.png">
    <title>Home</title>
</head>

<body>
    <!-- CABEÇALHO -->
    <header class="cabecalho ">
        <a href="">
            <img class="img-logo" src="../img/logo.png" alt="Logo da empresa">
        </a>
        <button class="btn-menu"><i class="fa fa-bars fa-lg"></i></button>
        <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>
            <ul class="nav">
                <li><a href="#">Home</a></li>
                <li><a href="internet.php">IoT</a></li>
                <li><a href="arquitetura.php">Org. e Arquitetura</a></li>
                <li><a href="#">Redes</a></li>
                <li><a href="sisOperacional.php">Sis. Operecional</a></li>
                <li class="sub-menu">
                    <a>Opções⤵</a>
                    <ul>
                        <li><a href="outros.php">Outros</a></li>
                        <li><a href="../app/sair.php">Sair</a></li>
                    </ul>
                </li>
            </ul>
            </ul>
        </nav>
    </header>

    <!-- CORPO DO SITE -->
    <div class="titulo">
        <h1>Seja Bem Vindos(a) à Hardware and Tech's</h1>
        <h3>Cursos disponivéis até o momento:</h3>
    </div>

    <div class="informacoes">
        <div class="quadro">
            <a href="internet.php">
                <img class="img" src="../img/IoT.jpg" alt="IoT">
                <p>Internet das Coisas</p>
            </a>
        </div>

        <div class="quadro">
            <a href="arquitetura.php">
                <img class="img" src="../img/arquitetura.jpeg" alt="Organização e Arquitetura">
                <p class="prg1">Organização e Arquitetura de Redes</p>
            </a>
        </div>

        <div class="quadro">
            <a href="redes.php">
                <img class="img" src="../img/redes2.jpg" alt="Redes">
                <p class="prg2">Redes</p>
            </a>
        </div>

        <div class="quadro">
            <a href="redes.php">
                <img class="img" src="../img/so.jpg" alt="Sistema Operacional">
                <p>Sistema Operacional</p>
            </a>
        </div>
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
    <script src="js/menu.js"></script>

</body>

</html>