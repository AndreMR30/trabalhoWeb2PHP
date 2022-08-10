<?php

    class ReservaSalaReuniao {
        
        private $nomeReserva;
        private $nomeCliente;
        private $nomeSalaReuniao;
        private $dataReserva;
       

        public function __construct($nomeReserva, $nomeCliente, $nomeSalaReuniao, $dataReserva) {
            $this->nomeReserva = $nomeReserva;
            $this->nomeCliente = $nomeCliente;
            $this->nomeSalaReuniao = $nomeSalaReuniao;
            $this->dataReserva = $dataReserva;
            
        }

        public function setNomeReserva($nomeReserva){
            $this->nomeReserva = $nomeReserva;
       }
        public function setNomeCliente($nomeCliente){
            $this->nomeCliente = $nomeCliente;
       }
        public function setNomeSalaReuniao($nomeSalaReuniao){
            $this->nomeSalaReuniao = $nomeSalaReuniao;
       }
       public function setDataReserva($dataReserva){
            $this->dataReserva = $dataReserva;
       }
       
       public function getNomeReserva(){
            return $this->nomeReserva;
       }
       public function getNomeCliente(){
            return $this->nomeCliente;
       }
       public function getNomeSalaReuniao(){
            return $this->nomeSalaReuniao;
       }
       public function getDataReserva(){
            return $this->dataReserva;
       }
    }


?>