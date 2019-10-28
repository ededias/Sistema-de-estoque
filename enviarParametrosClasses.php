<?php
    require_once('vendor/autoload.php');
    $validar = new ValidaUsuario();
    $usuario = new Usuario();

    $usuario->setLogin($_POST['usuario']);
    $usuario->setSenha($_POST['senha']);
    $validar->validar($usuario);

?>
