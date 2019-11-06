
<link rel="stylesheet" href="css/animacao.css">
<div class="loader" id="animacao">
    <div class="inner one"></div>
    <div class="inner two"></div>
    <div class="inner three"></div>
</div>
<div id="corpo"></div>
<script type="text/javascript" src="javascript/animacao.js"></script>
<?php

    require_once('vendor/autoload.php');
    $validar = new ValidaUsuario();
    $usuario = new Usuario();

    $usuario->setLogin($_POST['usuario']);
    $usuario->setSenha($_POST['senha']);
    $validar->validar($usuario);
    $i = 0;
    
?>


