<?php

class Connect_db extends mysqli {
    
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $datebase;
    
    public function __construct($dbhost, $dbuser, $dbpass, $datebase) {
        $this->dbhost = $dbhost;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
        $this->datebase = $datebase;
    }
    
    public function connect() {
        $conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->datebase);
        $conn->set_charset("utf8");
        
        if ($conn->connect_error) {
            die("Polaczenie nieudane. Blad: " . $conn->connect_error);
        } else {
            return $conn;
        }
    } 
    
    public function close() {
        $this->connect()->close();
    }
    
}
