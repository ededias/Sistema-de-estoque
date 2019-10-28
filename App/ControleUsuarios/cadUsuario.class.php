<?php
    
    Class ConsultaUsuario {
        
        public function cadUsuario(Usuario $p){
          
            $sql = 'INSERT INTO usuario(nome, idade, tipoUsuario, loginUsuario, senhaUsuario, CPF, funcao, sexo) VALUES (?,?,?,?,?,?,?, ?)';
            $stmt = Db::ConexaoDb()->prepare($sql);

            $stmt->bindValue(1, $p->getNome());
            $stmt->bindValue(2, $p->getIdade());
            $stmt->bindValue(3, $p->getTipoUsuario());
            $stmt->bindValue(4, $p->getLogin());
            $stmt->bindValue(5, $p->getSenha());
            $stmt->bindValue(6, $p->getCpf());
            $stmt->bindValue(7, $p->getFuncao());
            $stmt->bindValue(8, $p->getSexo());
            
            $stmt->execute();
            header('location: cadastroUsuario.php');
        }

        public function listarUsuario(){
            $sql = "SELECT nome, idade, tipoUsuario, loginUsuario, senhaUsuario, CPF, funcao, sexo, idusuario FROM usuario";
            $stmt = Db::ConexaoDb()->prepare($sql);
            // $stmt->bindValue(1, $p->getId());
            $stmt->execute();

            if($stmt->rowCount() > 0):
                $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $resultado;
            endif;

        }

        function atualizarUsuario(Usuario $p){
            $sql = 'UPDATE usuario SET nome = ?, idade = ?, tipoUsuario = ?, loginUsuario = ?, senhaUsuario = ?, CPF = ?, funcao = ?, sexo = ? WHERE idusuario = ? ';

            $stmt = Db::ConexaoDb()->prepare($sql);
            $stmt->bindValue(1, $p->getNome());
            $stmt->bindValue(2, $p->getIdade()); 
            $stmt->bindValue(4, $p->getLogin());
            $stmt->bindValue(3, $p->getTipoUsuario());
            $stmt->bindValue(5, $p->getSenha());
            $stmt->bindValue(6, $p->getCpf());
            $stmt->bindValue(7, $p->getFuncao());
            $stmt->bindValue(8, $p->getSexo());
            $stmt->bindValue(9, $p->getId());

            $stmt->execute();
            //header('location: visualizarUsuarios.php');
        }

        function excluirUsuario($id){
            $sql = "DELETE FROM usuario where idusuario = ?";

            $stmt = Db::ConexaoDb()->prepare($sql);
            $stmt->bindValue(1, $id->getId());
            $stmt->execute();
            header('location: visualizarUsuarios.php');
        }

    }
?>