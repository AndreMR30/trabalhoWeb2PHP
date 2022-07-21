<?php

    class ReservaSalaReuniao {
        
        private $nomeReserva;
        private $local;
        private $data;
       

        public function __construct($nomeReserva, $local, $data) {
            $this->nomeReserva = $nomeReserva;
            $this->local = $local;
            $this->data = $data;
            
        }

        public function setNomeReserva($nomeReserva){
            $this->nomeReserva = $nomeReserva;
       }
        public function setLocal($local){
            $this->local = $local;
       }
       public function setData($data){
            $this->data = $data;
       }
       
       public function getNomeReserva(){
            return $this->nomeReserva;
       }
       public function getLocal(){
            return $this->local;
       }
       public function getData(){
            return $this->data;
       }
    }


?>