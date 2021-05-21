<?php

require_once("$racine/Modele/Manager.php");
require_once("$racine/modele/type.php");

class typeManager extends Manager
{
    
    public function get($typeLP) 
    {
        $typeLP = (String) $typeLP;
        $q = $this->getPDO()->query('SELECT * FROM `types` where typeLP = "'.$typeLP.'"');
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