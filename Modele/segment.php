<?php

class segment 
{
    private $indIP;
    private $nomSegment;
    private $etage;
    private $nbSalle;
    private $nbPoste;

    public function __construct($indIP, $nomSegment , $etage, $nbSalle, $nbPoste) {
        $this->indIP = $indIP;
        $this->nomSegment = $nomSegment;
        $this->etage = $etage;
        $this->nbSalle = $nbSalle;
        $this->nbPoste = $nbPoste;
    }
    
    public function getIndIP() {
        return $this->indIP;
    }

    public function getNomSegment() {
        return $this->nomSegment;
    }

    public function getEtage() {
        return $this->etage;
    }

    public function getNbSalle() {
        return $this->nbSalle;
    }

    public function getNbPoste() {
        return $this->nbPoste;
    }

    
}
?>