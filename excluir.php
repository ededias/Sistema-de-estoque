<?php

    require_once('vendor/autoload.php');
    $usuario = new Usuario();

    $id = $_POST['idusuario'];

    $usuario->setId($id);
    $teste = new ConsultaUsuario();
    $teste->excluirUsuario($usuario);
