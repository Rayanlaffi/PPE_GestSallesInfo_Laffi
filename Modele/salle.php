<?php

class salle {

    private $id;
    private $nbPoste;
    private $indIP;



    public function __construct($id, $nbPoste ,$indIP) {
        $this->id = $id;
        $this->nbPoste = $nbPoste;
        $this->indIP = $indIP;

    }

    public function getId() {
        return $this->id;
    }
    
    public function getNbPoste() {
        return $this->nbPoste;
    }

    public function getIndIP() {
        return $this->indIP;
    }



}

?>