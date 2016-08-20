<?php

class Item extends Connect_db {
    private $id;
    private $price;
    private $description;
    private $availability;
    private $name;
    // w bazie id, name, price, description, availability
    
    function getId() {
        return $this->id;
    }
    
    function getPrice() {
        return $this->price;
    }

    function getDescription() {
        return $this->description;
    }

    function getAvailability() {
        return $this->availability;
    }

    function getName() {
        return $this->name;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setAvailability($availability) {
        $this->availability = $availability;
    }

    function setName($name) {
        $this->name = $name;
    }

    private function loadDataFromDb() {
        $this->connect();
        
    }
    
    public function functionName($param) {
        
    }
    

}

