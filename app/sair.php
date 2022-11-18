<?php
    // inicia seção
    session_start();
    
         //destruir todos os dados caso não exista
         unset($_SESSION['email']);
         unset($_SESSION['password']);
        //redireciona para:
        header('location: ../php/login.php');
 
?>