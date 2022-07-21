<?php

    class ReservaEscritorio {
        
        private $nomeReservaEscritorio;
        private $local;
        private $data;
       

        public function __construct($nomeReservaEscritorio, $local, $data) {
            $this->nomeReservaEscritorio = $nomeReservaEscritorio;
            $this->local = $local;
            $this->data = $data;
            
        }

        public function setNomeReservaEscritorio($nomeReservaEscritorio){
            $this->nomeReservaEscritorio = $nomeReservaEscritorio;
       }
        public function setLocal($local){
            $this->local = $local;
       }
       public function setData($data){
            $this->data = $data;
       }
       
       public function getNomeReservaEscritorio(){
            return $this->nomeReservaEscritorio;
       }
       public function getLocal(){
            return $this->local;
       }
       public function getData(){
            return $this->data;
       }
    }


?>