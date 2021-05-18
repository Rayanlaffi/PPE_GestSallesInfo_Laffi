<?php

require_once("$racine/Modele/Manager.php");
require_once("$racine/modele/utilisateur.php");

class utilisateurManager extends Manager
{
    public function get($id) 
    {
        $id = (int) $id;
        $q = $this->getPDO()->query('SELECT * FROM `users` where id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new utilisateur($donnees['id'], $donnees['nom'],$donnees['prenom'], $donnees['email'], $donnees['password'], $donnees['telephone'], $donnees['permission']);
       
        
    }
  
    public function getList() 
    {
        $users = [];
        $q = $this->getPDO()->query('SELECT * FROM `users`');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $users[$donnees['id']] = new utilisateur($donnees['id'], $donnees['nom'],$donnees['prenom'], $donnees['email'], $donnees['password'], $donnees['telephone'], $donnees['permission']);
        }
        return $users;
    }

    public function getUserByMail($mail)
    {
        $q = $this->getPDO()->query('SELECT * FROM `users` where email = "'.$mail.'"');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new utilisateur($donnees['id'], $donnees['nom'],$donnees['prenom'], $donnees['email'], $donnees['password'], $donnees['telephone'], $donnees['permission']);
    }
    
}
?>