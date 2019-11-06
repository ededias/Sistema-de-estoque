<?php
    
    $nome = $_POST['nome'];
    $CPF = $_POST['CPF'];
    $funcao = $_POST['funcao'];
    $tipoUsuario = $_POST['tipoUsuario'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    
    Class Controle {

        public function controleLogin($login, $senha) {
            $usuario->setLogin($login);
            $usuario->setSenha($senha);
            
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
            
            $cadUsuario->cadUsuario($usuario);
    
        }

        public function atualizar() {

            $usuario->setLogin($login);
            $usuario->setSenha($senha);
            $usuario->setNome($nome);
            $usuario->setCpf($CPF);
            $usuario->setFuncao($funcao);
            $usuario->setTipoUsuario($tipoUsuario);
            $usuario->setIdade($idade);
            $usuario->setSexo($sexo);
            
            $cadUsuario->cadUsuario($usuario);
        }

    }

