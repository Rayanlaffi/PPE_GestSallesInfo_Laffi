<?php

class poste 
{
    private $nPoste;
    private $nomPoste;
    private $indIP;
    private $ad;
    private $typePoste;
    private $idSalle;
    private $nbLog;

    public function __construct($nPoste, $nomPoste ,$indIP,$ad,$typePoste,$idSalle, $nbLog) {
        $this->nPoste = $nPoste;
        $this->nomPoste = $nomPoste;
        $this->indIP = $indIP;
        $this->ad = $ad;
        $this->typePoste = $typePoste;
        $this->idSalle = $idSalle;
        $this->nbLog = $nbLog;
    }
    
    public function getnPoste() {
        return $this->nPoste;
    }

    public function getNomPoste() {
        return $this->nomPoste;
    }

    public function getIndIP() {
        return $this->indIP;
    }

    public function getAd() {
        return $this->ad;
    }

    public function getTypePoste() {
        return $this->typePoste;
    }

    public function getIdSalle() {
        return $this->idSalle;
    }

    public function getNbLog() {
        return $this->nbLog;
    }
    
}
?>