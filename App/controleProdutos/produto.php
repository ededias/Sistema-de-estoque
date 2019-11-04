<?php

    Class Produto {

        private $nomeProduto, $tipoProd, $descProd, $IPI, $COFINS, $vlImpostos, $vcImpostos, $quantidade, $id, $idUsuario;

        public function getNomeProd(){
            return $this->nomeProduto;
        }
        public function setNomeProd($nomeProduto){
            $this->nomeProduto = $nomeProduto;
        }
        public function getTipoProd(){
            return $this->tipoProd;
        }
        public function setTipoProd($tipoProd){
            $this->tipoProd = $tipoProd;
        }
        public function getDescProd(){
            return $this->descProd;
        }

        public function setDescProd($descProd){
            $this->descProd = $descProd;
        }
        public function getIPI(){
            return $this->IPI;
        }
        public function setIPI($IPI){
           $this->IPI = $IPI;
        }
        public function getCOFINS(){
            return $this->COFINS;
        }
        public function setCOFINS($COFINS){
            $this->COFINS = $COFINS;
        }
        
        public function getVlImpostos(){
            return $this->vlImpostos;
        }
        public function setVlImpostos($vlImpostos){
            $this->vlImpostos = $vlImpostos;
        }
        public function getVcImpostos(){
            return $this->vcImpostos;
        }
        public function setVcImpostos( $vcImpostos){
            $this->vcImpostos =  $vcImpostos;
        }
        public function getQtdProd(){
            return $this->quantidade;
        }
        public function setQtdProd($quantidade){
            $this->quantidade =  $quantidade;
        }
        public function getProdId(){
            return $this->id;
        }
        public function setProdId($id){
            $this->id =  $id;
        }
        public function getUsuarioId(){
            return $this->idUsuario;
        }
        public function setUsuarioId($idUsuario){
            $this->idUsuario =  $idUsuario;
        }
        
        
    }
    
