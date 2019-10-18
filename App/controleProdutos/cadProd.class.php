<?php
    
    Class ConsultaProd {
        
        public function cadPrd(Produto $p){
          
            $sql = 'INSERT INTO produto(nomeProduto, tipoProduto, descricaoProduto, IPI, COFINS, valorSemImpostos, valorComImpostos, dataEntrada, dataSaida, quantidade) VALUES (?,?,?,?,?,?,?,?,?,?)';
            $stmt = Db::ConexaoDb()->prepare($sql);

            $stmt->bindValue(1, $p->get());
            $stmt->bindValue(2, $p->get());
            $stmt->bindValue(3, $p->get());
            $stmt->bindValue(4, $p->get());
            $stmt->bindValue(5, $p->get());
            $stmt->bindValue(6, $p->get());
            $stmt->bindValue(7, $p->get());
            $stmt->bindValue(8, $p->get());
            
            $stmt->execute();
            echo ("Produto cadastrado com sucesso");
            header('location: cadastroUsuario.php');
        }

        public function listarProduto(){
           $sql = "SELECT * FROM produto";
           $stmt = Db::ConexaoDb()->prepare($sql);

           $stmt->execute();

        }
        function atualizarProduto(){
            $sql = "UPDATE produto SET nomeProduto = ?, tipoProduto = ?, descricaoProduto = ?, IPI = ?, COFINS = ?, valorSemImpostos = ?, valorComImpostos =?, quantidade WHERE idUsuario = ?";

            $stmt = Db::ConexaoDb()->prepare($sql);
            $stmt->bindValue(1, $p->get());
            $stmt->bindValue(2, $p->get());
            $stmt->bindValue(3, $p->get());
            $stmt->bindValue(4, $p->get());
            $stmt->bindValue(5, $p->get());
            $stmt->bindValue(6, $p->get());
            $stmt->bindValue(7, $p->get());
            $stmt->bindValue(1, $p->get());
            $stmt->bindValue(1, $p->get());
            $stmt->execute();
        }
        function excluirProduto($id){
            $sql = "DELETE FROM produto where idProduto = ?";

            $stmt = Db::ConexaoDb()->prepare($sql);
            $stmt->bindValue(1, getId());
        }

    }
?>