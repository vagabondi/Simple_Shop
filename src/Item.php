<?php

class Item {
    private $id;
    private $price;
    private $description;
    private $availability;
    private $name;
    private $connection;
    // w bazie id, name, price, description, availability
    
    public function __construct(Connect_db $conn) {
        $this->connection=$conn;
        
    }
    
    
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

    public function loadDataFromDb() {
        $this->connection->connection();

        
        $this->connection->close();
        return $result;
    }
    
    public function functionName($param) {
        
    }
    

}

