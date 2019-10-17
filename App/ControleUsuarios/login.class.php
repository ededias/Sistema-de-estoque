<?php

    Class Usuario {
        private $loginUsuario, $senhaUsuario, $tipoUsuario, $idusuario, $idade, $CPF, $funcao, $sexo;
        private $nome;
        
        public function getNome(){
            return $this-> nome;
        }
        public function setNome($nome){
            $this-> nome = $nome;
        }
        public function getIdade(){
            return $this-> idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function getTipoUsuario(){
            return $this-> tipoUsuario;
        }

        public function setTipoUsuario($tipoUsuario){
            $this->tipoUsuario = $tipoUsuario;
        }
        public function getLogin(){
            return $this-> loginUsuario;
        }
        public function setLogin($loginUsuario){
            $this->loginUsuario = $loginUsuario;
        }
        public function getSenha(){
            return $this-> senhaUsuario;
        }
        public function setSenha($senhaUsuario){
            $this-> senhaUsuario = $senhaUsuario;
        }
        public function getCpf(){
            return $this-> CPF;
        }
        public function setCpf( $CPF){
            $this-> CPF =  $CPF;
        }
        public function getFuncao(){
            return $this-> funcao;
        }
        public function setFuncao($funcao){
            $this->funcao =  $funcao;
        }
       
        public function getSexo(){
            return $this-> sexo;
        }
        public function setSexo($sexo ){
            $this->sexo = $sexo;
        }
        
        public function getId(){
            return $this-> idUsuario;
        }
        
        public function setId($idUsuario){
            $this-> idUsuario = $idUsuario;
        }

        
        
    }
    
