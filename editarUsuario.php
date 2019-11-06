<?php

    require_once('vendor/autoload.php');

    $cad = new Usuario();

    $cad->setNome($_POST['nome']);
    $cad->setIdade($_POST['idade']);
    $cad->setTipoUsuario($_POST['tipo']);
    $cad->setLogin($_POST['login']);
    $cad->setSenha($_POST['senha']);
    $cad->setCpf($_POST['CPF']);
    $cad->setFuncao($_POST['funcao']);
    $cad->setSexo($_POST['sexo']);
    $cad->setId($_POST['idusuario']);

    $usuario = new ConsultaUsuario();
    $usuario->atualizarUsuario($cad);
