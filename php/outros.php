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
    <link rel="stylesheet" href="../css/contato.css">
    <link rel="icon" href="../img/logo.png">
    <title>Outros</title>
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
                <li><a href="home.php">Home</a></li>
                <li><a href="internet.php">IoT</a></li>
                <li><a href="arquitetura.php">Org. e Arquitetura</a></li>
                <li><a href="redes.php">Redes</a></li>
                <li><a href="sisOperacional.php">Sis. Operecional</a></li>
                <li class="sub-menu">
                    <a>Opções⤵</a>
                    <ul>
                        <li><a href="#">Outros</a></li>
                        <li><a href="../app/sair.php">Sair</a></li>
                    </ul>
                </li>
            </ul>
            </ul>
        </nav>
    </header>

    <main>
        <div class="row">
            <h1>Formulário de Contato</h1>
            <form action="https://api.staticforms.xyz/submit" method="post" class="card">
                <input type="hidden" name="accessKey" value="162e8b93-0f34-4809-83c3-01222850228f">
                <input type="hidden" name="redirectTo" value="#">

                <label for="">Nome*</label>
                <input type="text" id="inputNome" name="name" placeholder="Example" required maxlength="25" max="100"
                    minlength="2" min="1">

                <label for="">E-mail*</label>
                <input type="email" id="inputEmail" name="email" placeholder="example@gmail.com" required
                    maxlength="50">

                <label for="">Mensagem*</label>
                <textarea name="message" id="message" placeholder="example" required maxlength="250"></textarea>

                <button type="button" class="enviar">Enviar formulário</button>
            </form>
        </div>
    </main>

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