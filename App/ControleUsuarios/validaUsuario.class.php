<?php

    Class ValidaUsuario {
           
        public function validar(Usuario $a) {
  
            $sql = "SELECT * FROM usuario WHERE loginUsuario = ? and senhaUsuario = ?";
            
            $stmt = Db::ConexaoDb()->prepare($sql);
            // $stmt->bindValue(1, $validacao->getId());
            $stmt->bindValue(1, $a->getLogin());
            $stmt->bindValue(2, $a->getSenha());
            $stmt->execute();

            $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);
            if($usuario['loginUsuario'] != '' && $usuario['senhaUsuario'] != ''):
                session_start();
                $_SESSION = $usuario;
                header('location: index.php');
            elseif($usuario['loginUsuario'] == '' && $usuario['senhaUsuario'] == ''):
                header('location: login.php');
            endif;
                
        } 
       
    }
   
