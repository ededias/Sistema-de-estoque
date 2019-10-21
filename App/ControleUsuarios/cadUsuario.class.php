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
            echo ("Produto cadastrado com sucesso");
            header('location: cadastroUsuario.php');
        }

        public function listarUsuario(){
           $sql = "SELECT * FROM usuario";
           $stmt = Db::ConexaoDb()->prepare($sql);

           $stmt->execute();

           if($stmt->rowCount() > 0):
               $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
               return $resultado;
           endif;

        }
        function atualizarUsuario(){
            $sql = "UPDATE usuario SET nome = ?, idade = ?, tipoUsuario = ?, loginUsuario = ?, CPF = ?, funcao = ?, sexo =? WHERE idUsuario = ?";

            $stmt = Db::ConexaoDb()->prepare($sql);
            $stmt->bindValue(1, $p->getNome());
            $stmt->bindValue(2, $p->getIdade());
            $stmt->bindValue(3, $p->getTipoUsuario());
            $stmt->bindValue(4, $p->getLogin());
            $stmt->bindValue(5, $p->getSenha());
            $stmt->bindValue(6, $p->getCpf());
            $stmt->bindValue(7, $p->getFuncao());
            $stmt->bindValue(1, $p->getSexo());
            $stmt->bindValue(1, $p->getId());
            $stmt->execute();
        }
        function excluirUsuario($id){
            $sql = "DELETE FROM usuario where idUsuario = ?";

            $stmt = Db::ConexaoDb()->prepare($sql);
            $stmt->bindValue(1, getId());
        }

    }
?>