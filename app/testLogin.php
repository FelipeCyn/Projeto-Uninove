<?php

    //inicia seção de login
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        //acessar o sistema
        include_once('../app/config.php');

        $email = $_POST['email'];
        $senha = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        //verificação de linhas
        if(mysqli_num_rows($result) < 1) {

            //destruir todos os dados caso não exista
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            //redireciona para a pagina login quando não existir usuario 
            header('location: ../php/login.php');
        }
        else {
            
            // cria duas variavéis ao iniciar login
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $senha;

            //redireciona para a pagina inicial de sistema quando existir login 
            header('location: ../php/home.php');
        }
    }
    // não acessa o sistema
    else {
        header('location:../php/login.php');
    }
    
?>