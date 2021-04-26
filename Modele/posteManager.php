<?php

require_once("Modele/Manager.php");
require_once("modele/poste.php");

class posteManager extends Manager
{
    
    public function get($nPoste) 
    {
        $nPoste = (String) $nPoste;
        $q = $this->getPDO()->query('SELECT * FROM `poste` where nPoste = "'.$nPoste.'"');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new poste($donnees['nPoste'], $donnees['nomPoste'],$donnees['indIP'],$donnees['ad'],$donnees['typePoste'],$donnees['idSalle'],$donnees['nbLog']);
        
    }

    public function getList() 
    {
        $poste = [];
        $q = $this->getPDO()->query('SELECT * FROM `poste`');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $poste[$donnees['nPoste']] = new poste($donnees['nPoste'], $donnees['nomPoste'],$donnees['indIP'],$donnees['ad'],$donnees['typePoste'],$donnees['idSalle'],$donnees['nbLog']);
        }
        return $poste;
    }

    public function getPosteParSalle($id) 
    {
        $id = (int) $id;
        $poste = [];
        $q = $this->getPDO()->query('SELECT * FROM `poste` where idSalle = '.$id);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $poste[$donnees['nPoste']] = new poste($donnees['nPoste'], $donnees['nomPoste'],$donnees['indIP'],$donnees['ad'],$donnees['typePoste'],$donnees['idSalle'],$donnees['nbLog']);
        }
        return $poste;
        
    }
    
}
?>