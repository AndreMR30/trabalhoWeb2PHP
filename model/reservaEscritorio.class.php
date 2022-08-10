<?php

    class ReservaEscritorio {
        
        private $nomeReservaEscritorio;
        private $nomeCliente;
        private $nomeEscritorio;
        private $dataReserva;
       

        public function __construct($nomeReservaEscritorio, $nomeCliente, $nomeEscritorio, $dataReserva) {
            $this->nomeReservaEscritorio = $nomeReservaEscritorio;
            $this->nomeCliente = $nomeCliente;
            $this->nomeEscritorio = $nomeEscritorio;
            $this->dataReserva = $dataReserva;
            
        }

        public function setNomeReservaEscritorio($nomeReservaEscritorio){
            $this->nomeReservaEscritorio = $nomeReservaEscritorio;
       }
        public function setNomeCliente($nomeCliente){
            $this->nomeCliente = $nomeCliente;
       }
       public function setNomeEscritorio($nomeEscritorio){
            $this->nomeEscritorio = $nomeEscritorio;
       }
       public function setDataReserva($dataReserva){
            $this->dataReserva = $dataReserva;
       }
       
       public function getNomeReservaEscritorio(){
            return $this->nomeReservaEscritorio;
       }
       public function getNomeCliente(){
            return $this->nomeCliente;
       }
       public function getNomeEscritorio(){
            return $this->nomeEscritorio;
       }
       public function getDataReserva(){
            return $this->dataReserva;
       }
    }


?>