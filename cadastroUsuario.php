<?php 
    include_once('vendor/autoload.php');
    $secao = new ValidaUsuario();

    session_start();
            
    if(!isset($_SESSION['usuario'])){
        header('location: login.php');
        exit();
    }

?> 
<html>
    <head>
    </head>
    <body> 
        <pre>
        <form method="post" action="enviarParametrosClasses.php">
            nome:
            <input  type="text" name="nome">
            idade:
            <input  type="text" name="idade">
            tipo usuario:
            <input  type="text" name="tipoUsuario">
            login usuario:
            <input  type="text" name="usuario">
            senha usuario:
            <input  type="text" name="senha">
            CPF:
            <input  type="text" name="CPF">
            Função
            <input  type="text" name="funcao">
            Sexo:
            <input  type="text" name="sexo">
            <input type="submit">
        </form>
        <a href="index.php">Voltar a Página inicial</a>
        <a href="visualizarUsuarios.php">Consulta de usuarios</a>
       
    </body>
</html>



