<?php

    class Auditorio {
        
        private $nomeAuditorio;
        private $proprietario;
        private $email;
        private $qtdPessoa;
        private $endereco;
        private $cidade;
        private $estado;
        

        public function __construct($nomeAuditorio, $proprietario, $email, $qtdPessoa, $endereco, $cidade, $estado) {
            $this->nomeAuditorio = $nomeAuditorio;
            $this->proprietario = $proprietario;
            $this->email = $email;
            $this->qtdPessoa = $qtdPessoa;
            $this->endereco = $endereco;
            $this->cidade = $cidade;
            $this->estado = $estado;
        }

        public function setNomeAuditorio($nomeAuditorio){
            $this->nomeAuditorio = $nomeAuditorio;
       }
        public function setProprietario($proprietario){
            $this->proprietario = $proprietario;
       }
       public function setEmail($email){
            $this->email = $email;
       }
       public function setQtdPessoa($qtdPessoa){
            $this->qtdPessoa = $qtdPessoa;
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
       public function getNomeAuditorio(){
            return $this->nomeAuditorio;
       }
       public function getProprietario(){
            return $this->proprietario;
       }
       public function getEmail(){
            return $this->email;
       }
       public function getQtdPessoa(){
            return $this->qtdPessoa;
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