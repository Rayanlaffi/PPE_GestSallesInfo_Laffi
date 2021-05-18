<?php

require_once("$racine/Modele/Manager.php");
require_once("$racine/modele/segment.php");

class segmentManager extends Manager
{
    
    public function get($indIP) 
    {
        $indIP = (String) $indIP;
        $q = $this->getPDO()->query('SELECT * FROM `segment` where indIP = "'.$indIP.'"');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new segment($donnees['indIP'], $donnees['nomSegment'],$donnees['etage'],$donnees['nbSalle'],$donnees['nbPoste']);
        
    }

    public function getList() 
    {
        $segments = [];
        $q = $this->getPDO()->query('SELECT * FROM `segment`');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $segments[$donnees['indIP']] = new segment($donnees['indIP'], $donnees['nomSegment'],$donnees['etage'],$donnees['nbSalle'],$donnees['nbPoste']);
        }
        return $segments;
    }

    
    
}
?>