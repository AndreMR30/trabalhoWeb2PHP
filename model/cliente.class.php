<?php
  class Cliente{
     private $nomeCliente;
     private $email;
     private $cpf;
     private $contato;
     private $endereco;
     private $cidade;
     private $estado;

     public function __construct($nomeCliente,$email,$cpf,$contato,$endereco,$cidade,$estado){
          $this->nomeCliente = $nomeCliente;
          $this->email = $email;
          $this->cpf = $cpf;
          $this->contato = $contato;
          $this->endereco = $endereco;
          $this->cidade = $cidade;
          $this->estado = $estado;
     }

     public function setNomeCliente($nomeCliente){
          $this->nomeCliente = $nomeCliente;
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
     public function getNomeCliente(){
          return $this->nomeCliente;
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