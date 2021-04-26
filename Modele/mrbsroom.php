<?php

class mrbsroom {

    private $id;
    private $disabled;
    private $area_id;
    private $room_name;
    private $sort_key;
    private $description;
    private $capacity;
    private $room_admin_email;
    private $custom_html;


    public function __construct($id,$disabled,$area_id,$room_name,$sort_key,$description,$capacity,$room_admin_email,$custom_html) {
        $this->id = $id;
        $this->disabled = $disabled;
        $this->area_id = $area_id;
        $this->room_name = $room_name;
        $this->sort_key = $sort_key;
        $this->description = $description;
        $this->capacity = $capacity;
        $this->room_admin_email = $room_admin_email;
        $this->custom_html = $custom_html;

    }

    public function getId() {
        return $this->id;
    }
    
    public function getDisabled() {
        return $this->disabled;
    }
    public function getAreaId() {
        return $this->area_id;
    }
    public function getRoomName() {
        return $this->room_name;
    }
    public function getSortKey() {
        return $this->sort_key;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getCapacity() {
        return $this->capacity;
    }
    public function getRoomAdminEmail() {
        return $this->room_admin_email;
    }
    public function getCustomHtml() {
        return $this->custom_html;
    }


}

?>