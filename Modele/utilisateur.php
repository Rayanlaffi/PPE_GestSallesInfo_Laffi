<?php

class utilisateur {

    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $telephone;
    private $permission;


    public function __construct($id,$nom,$prenom,$email,$password,$telephone,$permission) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
        $this->telephone = $telephone;
        $this->permission = $permission;

    }

    public function getId() {
        return $this->id;
    }
    
    public function getNom() {
        return $this->nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getTelephone() {
        return $this->telephone;
    }
    public function getPermission() {
        return $this->permission;
    }


}

?>