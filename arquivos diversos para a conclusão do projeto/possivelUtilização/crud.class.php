<?php
    include('carregamentoDb.php');
    echo("teste");
    Class ClassCrud extends Db{

        private $crud;
        private $contador;

        public function preparedStatements($query, $parametros) {
            $this->conteParametros($parametros);
            $this->crud=$this->conexaoDb()->prepare($query);
            echo $this->$contador;
            
        }

        private function countParametros($parametros){
            $this->$contador=conte($parametros);
        }

    }

?>