<?php include_once('login/validasecao.php'); ?>
<html>
    <head>      
    </head>
    <body>
        <form>
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
        <a href="cadastro.php">Cadastro Usuario</a>
        <button><a href="login/sair.php">Sair</a></button>
    </body>
</html>