<?php
  class Proprietario{
     private $nome;
     private $email;
     private $cpf;
     private $contato;
     private $endereco;
     private $cidade;
     private $estado;

     public function __construct($nome,$email,$cpf,$contato,$endereco,$cidade,$estado){
          $this->nome = $nome;
          $this->email = $email;
          $this->cpf = $cpf;
          $this->contato = $contato;
          $this->endereco = $endereco;
          $this->cidade = $cidade;
          $this->estado = $estado;
     }

     public function setNome($nome){
          $this->nome = $nome;
     }
     public function setEmail($email){
          $this->email = $email;
     }
     public function setCpf($cpf){
          $this->cpf = $cpf;
     }
     public function setContato($contato){
          $this->contato = $contato;
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
     public function getNome(){
          return $this->nome;
     }
     public function getEmail(){
          return $this->email;
     }
     public function getCpf(){
          return $this->cpf;
     }
     public function getContato(){
          return $this->contato;
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