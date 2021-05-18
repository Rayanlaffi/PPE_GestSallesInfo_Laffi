<?php

require_once("$racine/Modele/Manager.php");
require_once("$racine/modele/mrbsroom.php");

class mrbsroomManager extends Manager
{
    public function get($id) 
    {
        $id = (int) $id;
        $q = $this->getPDO()->query('SELECT `id`,`disabled`,`area_id`,`room_name`,`sort_key`,`description`,`capacity`,`room_admin_email`,`custom_html` FROM `mrbs_room` where id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new mrbsroom($donnees['id'], $donnees['disabled'],$donnees['area_id'],$donnees['room_name'], $donnees['sort_key'],$donnees['description'],$donnees['capacity'],$donnees['room_admin_email'],$donnees['custom_html']);
       
        
    }
  
    public function getList() 
    {
        $room = [];
        $q = $this->getPDO()->query('SELECT `id`,`disabled`,`area_id`,`room_name`,`sort_key`,`description`,`capacity`,`room_admin_email`,`custom_html` FROM `mrbs_room`');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $room[$donnees['id']] = new mrbsroom($donnees['id'], $donnees['disabled'],$donnees['area_id'],$donnees['room_name'], $donnees['sort_key'],$donnees['description'],$donnees['capacity'],$donnees['room_admin_email'],$donnees['custom_html']);
        }
        return $room;
    }

    
    
}
?>