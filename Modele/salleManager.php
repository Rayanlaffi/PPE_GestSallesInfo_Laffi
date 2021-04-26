<?php

require_once("Modele/Manager.php");
require_once("modele/salle.php");

class salleManager extends Manager
{
    public function get($id) 
    {
        $id = (int) $id;
        $q = $this->getPDO()->query('SELECT id,nbPoste,indIP from salle where id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new salle($donnees['id'], $donnees['nbPoste'],$donnees['indIP']);
        
    }
  
    public function getList() 
    {
        $salles = [];
        $q = $this->getPDO()->query('SELECT id,nbPoste,indIP from salle');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $salles[$donnees['id']] = new salle($donnees['id'], $donnees['nbPoste'],$donnees['indIP']);
        }
        return $salles;
    }

    
    
}
?>