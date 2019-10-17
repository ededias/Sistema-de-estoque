<?php
 
    
    Class ValidaUsuario {
           
        public function validar(Usuario $validacao) {
  
            $sql = "SELECT loginUsuario, senhaUsuario FROM usuario WHERE loginUsuario = ? and senhaUsuario = md5(?)";
            
            $stmt = Db::ConexaoDb()->prepare($sql);
            $stmt->bindValue(1, $validacao->getLogin());
            $stmt->bindValue(2, $validacao->getSenha());
          
            $stmt->execute();
            $linhas = $stmt->rowCount();
           
            if($linhas == 1) {
                session_start();
                $_SESSION['usuario'] = $validacao->getLogin();
                header('location: index.php');
            } else {
                header('location: login.php');
            }
        } 

        public function validaSecao() {
           
           
        }
    }
   
