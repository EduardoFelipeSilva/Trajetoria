<?php

    class Admin{
        public $idStatus, $tipoStatus;

        public function getId(){
            return $this->idStatus;
        }
        public function setId($idstatus){
            $this->idStatus = $idstatus;
        }

        public function getTipoStatus(){
          return $this->tipoStatus;
        }
        public function setNome($tipo){
            $this->tipoStatus = $tipo;
        }

    }
?>