<?php

    class Escritorio {
        
        private $nomeEscritorio;
        private $proprietario;
        private $email;
        private $computador;
        private $endereco;
        private $cidade;
        private $estado;
        

        public function __construct($nomeEscritorio, $proprietario, $email, $computador, $endereco, $cidade, $estado) {
            $this->nomeEscritorio = $nomeEscritorio;
            $this->proprietario = $proprietario;
            $this->email = $email;
            $this->computador = $computador;
            $this->endereco = $endereco;
            $this->cidade = $cidade;
            $this->estado = $estado;
        }

        public function setNomeSala($nomeEscritorio){
            $this->nomeEscritorio = $nomeEscritorio;
       }
        public function setProprietario($proprietario){
            $this->proprietario = $proprietario;
       }
       public function setEmail($email){
            $this->email = $email;
       }
       public function setComputador($computador){
            $this->computador = $computador;
       }
       public function setEndereco($endereco){
            $this->endereco = $endereco;
       }
       public function setCidade($cidade){
            $this->cidade = $cidade;
       }
       public function setEstado($estado){
            $this->estado = $estado;
       }
       public function getNomeEscritorio(){
            return $this->nomeEscritorio;
       }
       public function getProprietario(){
            return $this->proprietario;
       }
       public function getEmail(){
            return $this->email;
       }
       public function getComputador(){
            return $this->computador;
       }
       public function getEndereco(){
            return $this->endereco;
       }
       public function getCidade(){
            return $this->cidade;
       }
       public function getEstado(){
            return $this->estado;
       }
    }


?>