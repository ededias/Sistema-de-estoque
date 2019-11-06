<?php

    require_once('vendor/autoload.php');

    $cad = new Usuario();

    $cad->setNome($_POST['nome']);
    $cad->setIdade($_POST['idade']);
    $cad->setTipoUsuario($_POST['tipoUsuario']);
    $cad->setLogin($_POST['usuario']);
    $cad->setSenha($_POST['senha']);
    $cad->setCpf($_POST['CPF']);
    $cad->setFuncao($_POST['funcao']);
    $cad->setSexo($_POST['sexo']);

    print_r($cad);
    $usuario = new ConsultaUsuario();
    $usuario->cadUsuario($cad);
?>