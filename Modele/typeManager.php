<?php

require_once("$racine/Modele/Manager.php");
require_once("$racine/modele/type.php");

class typeManager extends Manager
{
    
    public function get($indIP) 
    {
        $indIP = (String) $indIP;
        $q = $this->getPDO()->query('SELECT * FROM `types` where indIP = "'.$indIP.'"');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new type($donnees['typeLP'], $donnees['nomType']);
        
    }

    public function getList() 
    {
        $types = [];
        $q = $this->getPDO()->query('SELECT * FROM `types`');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $types[$donnees['typeLP']] = new type($donnees['typeLP'], $donnees['nomType']);
        }
        return $types;
    }

    
    
}
?>