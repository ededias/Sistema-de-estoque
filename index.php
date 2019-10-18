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
        <form >
            <?php echo $_SESSION['usuario']; ?>
            Código produto:
            <input type="text" name="codProd" placeholder="00">
            Tipo produto:
            <input type="text" name="tipoProd" placeholder="tipo do produto">
            Descrição:
            <input type="text" name="descProd" placeholder="descrição produto">
            Data do cadastro:
            <input type="date" name="dataCad">
            
        </form>
        <a href="cadastroUsuario.php">Cadastro Usuario</a>
        <button><a href="login/sair.php">Sair</a></button>
    </body>
</html>