<?php

    Class Produto {

        private $produto, $tipoProd, $descProd, $IPI, $COFINS, $vlImpostos, $vcImpostos, $quantidade;

        public function getNomeProd(){
            return $this->produto;
        }
        public function setNomeProd($produto){
            $this->produto = $produto;
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
        
    }
    
