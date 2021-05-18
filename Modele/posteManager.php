<?php

require_once("$racine/Modele/Manager.php");
require_once("$racine/modele/poste.php");

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

    public function createPoste($nomPoste,$indip,$ad,$typePoste,$nbLog) 
    {
       $requeteMaxID = $this->getPDO()->query('SELECT MAX(CAST(SUBSTRING(`nPoste`, 2) AS UNSIGNED)) as "maxID" from poste'); // la requete 
       $maxID = $requeteMaxID->fetch(PDO::FETCH_ASSOC);// ici je recup le tableau qui nous donne la valeur
       $new_id = $maxID['maxID'] + 1; //ici je rajoute 1 a l'id
       $nPoste = "p" . $new_id; // ici je remet le 'p' devant
       $idSalle = null;

       if(empty($indip)){$indip = null;}
       if(empty($ad)){$ad = null;}
       if(empty($typePoste)){$typePoste = null;}
       if(empty($nbLog)){$nbLog = null;}

       $sql = "INSERT INTO poste (nPoste, nomPoste, indIP, ad, typePoste, idSalle, nbLog) VALUES (?,?,?,?,?,?,?)";
       $stmt= $this->getPDO()->prepare($sql);
       $stmt->execute([$nPoste, $nomPoste, $indip, $ad, $typePoste, $idSalle, $nbLog]);
        
    }
    
}
?>