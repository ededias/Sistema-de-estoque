<?php
    
    Class ConsultaProd {
        
        public function cadProd(Produto $p){
          
            $sql = 'INSERT INTO produto(nomeProduto, tipoProduto, descricaoProduto, IPI, COFINS, quantidade, usuario_idusuario) VALUES (?, ?, ?, ?, ?, ?, ?)';
            $stmt = Db::ConexaoDb()->prepare($sql);

            $stmt->bindValue(1, $p->getNomeProd());
            $stmt->bindValue(2, $p->getTipoProd());
            $stmt->bindValue(3, $p->getDescProd());
            $stmt->bindValue(4, $p->getIPI());
            $stmt->bindValue(5, $p->getCOFINS());
            // $stmt->bindValue(6, $p->getVlImpostos());
            $stmt->bindValue(6, $p->getQtdProd());
            $stmt->bindValue(7, $p->getId());
            print_r($p->getQtdProd());
            $stmt->execute();
            header('location: index.php');
        }

        public function listarProduto(){
            $sql = "SELECT * FROM produto";
            $stmt = Db::ConexaoDb()->prepare($sql);

            $stmt->execute();

            if($stmt->rowCount() > 0):
                $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $resultado;
            endif;

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