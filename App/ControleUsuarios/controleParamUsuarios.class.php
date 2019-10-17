<?php

    Class Controle {

        public function controleLogin() {
            $usuario->setLogin($login);
            $usuario->setSenha($senha);
            
            $validar = new ValidaUsuario();
            
            $validar-> validar($usuario);
        }

        public function controleCad() {
            $nome = $_POST['nome'];
            $CPF = $_POST['CPF'];
            $funcao = $_POST['funcao'];
            $tipoUsuario = $_POST['tipoUsuario'];
            $idade = $_POST['idade'];
            $sexo = $_POST['sexo'];

            $usuario->setLogin($login);
            $usuario->setSenha($senha);
            $usuario->setNome($nome);
            $usuario->setCpf($CPF);
            $usuario->setFuncao($funcao);
            $usuario->setTipoUsuario($tipoUsuario);
            $usuario->setIdade($idade);
            $usuario->setSexo($sexo);

            $cadUsuario = new ConsultaUsuario();
            $cadUsuario->cadUsuario($usuario);
    
        }

    }

