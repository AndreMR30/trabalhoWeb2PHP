<?php

    class ReservaAuditorio {
        
        private $nomeReservaAuditorio;
        private $local;
        private $data;
       

        public function __construct($nomeReservaAuditorio, $local, $data) {
            $this->nomeReservaAuditorio = $nomeReservaAuditorio;
            $this->local = $local;
            $this->data = $data;
            
        }

        public function setNomeReservaAuditorio($nomeReservaAuditorio){
            $this->nomeReservaAuditorio = $nomeReservaAuditorio;
       }
        public function setLocal($local){
            $this->local = $local;
       }
       public function setData($data){
            $this->data = $data;
       }
       
       public function getNomeReservaAuditorio(){
            return $this->nomeReservaAuditorio;
       }
       public function getLocal(){
            return $this->local;
       }
       public function getData(){
            return $this->data;
       }
    }


?>