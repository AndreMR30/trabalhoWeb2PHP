<?php

    class ReservaAuditorio {
        
        private $nomeReservaAuditorio;
        private $nomeCliente;
        private $nomeAuditorio;
        private $dataReserva;
       

        public function __construct($nomeReservaAuditorio, $nomeCliente, $nomeAuditorio, $dataReserva) {
            $this->nomeReservaAuditorio = $nomeReservaAuditorio;
            $this->nomeCliente = $nomeCliente;
            $this->nomeAuditorio = $nomeAuditorio;
            $this->dataReserva = $dataReserva;
            
        }

        public function setNomeReservaAuditorio($nomeReservaAuditorio){
            $this->nomeReservaAuditorio = $nomeReservaAuditorio;
       }
        public function setNomeCliente($nomeCliente){
            $this->nomeCliente = $nomeCliente;
       }
       public function setNomeAuditorio($nomeAuditorio){
            $this->nomeAuditorio = $nomeAuditorio;
       }
       public function setDataReserva($dataReserva){
            $this->dataReserva = $dataReserva;
       }
       
       public function getNomeReservaAuditorio(){
            return $this->nomeReservaAuditorio;
       }
       public function getNomeCliente(){
            return $this->nomeCliente;
       }
       public function getNomeAuditorio(){
            return $this->nomeAuditorio;
       }
       public function getDataReserva(){
            return $this->dataReserva;
       }
    }


?>