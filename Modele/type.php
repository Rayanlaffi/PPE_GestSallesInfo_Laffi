<?php

class type 
{
    private $typeLP;
    private $nomType;

    public function __construct($typeLP, $nomType) {
        $this->typeLP = $typeLP;
        $this->nomType = $nomType;
    }
    
    public function getTypeLP() {
        return $this->typeLP;
    }

    public function getNomType() {
        return $this->nomType;
    }


    
}
?>