<?php

require_once("$racine/Modele/Manager.php");
require_once("$racine/modele/mrbsroom.php");
require_once("$racine/modele/salle.php");

class mrbsroomManager extends Manager
{
    public function get($id) 
    {
        $id = (int) $id;
        $q = $this->getPDO()->query('SELECT `id`,`disabled`,`area_id`,`room_name`,`sort_key`,`description`,`capacity`,`room_admin_email`,`custom_html` FROM `mrbs_room` where disabled = 0 and id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new mrbsroom($donnees['id'], $donnees['disabled'],$donnees['area_id'],$donnees['room_name'], $donnees['sort_key'],$donnees['description'],$donnees['capacity'],$donnees['room_admin_email'],$donnees['custom_html']);
       
        
    }
  
    public function getList() 
    {
        $room = [];
        $q = $this->getPDO()->query('SELECT `id`,`disabled`,`area_id`,`room_name`,`sort_key`,`description`,`capacity`,`room_admin_email`,`custom_html` FROM `mrbs_room` where disabled = 0');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $room[$donnees['id']] = new mrbsroom($donnees['id'], $donnees['disabled'],$donnees['area_id'],$donnees['room_name'], $donnees['sort_key'],$donnees['description'],$donnees['capacity'],$donnees['room_admin_email'],$donnees['custom_html']);

            
        }
        return $room;
    }


    public function getPlacesRestantes($id) 
    {
        $id = (int) $id;
        $q = $this->getPDO()->query('SELECT `capacity` FROM `mrbs_room` where id = '.$id);
        $donneesMrbs = $q->fetch(PDO::FETCH_ASSOC);
        $q = $this->getPDO()->query('SELECT `nbPoste` FROM `salle` where id = '.$id);
        $donneesSalle = $q->fetch(PDO::FETCH_ASSOC);
        $resultat =  $donneesMrbs['capacity'] - $donneesSalle['nbPoste'];
        return $resultat;
    }

    public function createSalle($disabled,$area_id,$room_name,$description,$capacity) 
    {
       if(empty($disabled)){$disabled = null;}
       if(empty($area_id)){$area_id = null;}
       if(empty($room_name)){$room_name = null;}
       if(empty($description)){$description = null;}
       if(empty($capacity)){$capacity = null;}

       $sql = "INSERT INTO `mrbs_room` (`id`, `disabled`, `area_id`, `room_name`, `sort_key`, `description`, `capacity`, `room_admin_email`, `custom_html`) VALUES (NULL, '?', '?', '?', NULL, '?', '?', NULL, NULL);";
       $stmt= $this->getPDO()->prepare($sql);
       $stmt->execute([$disabled, $area_id, $room_name, $description, $capacity]);
        
    }
    
    
}
?>