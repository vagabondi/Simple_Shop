<?php

class Connect_db extends mysqli {
    
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $datebase;
    private $connection;
    
    public function __construct($dbhost, $dbuser, $dbpass, $datebase) {
        $this->dbhost = $dbhost;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
        $this->datebase = $datebase;
    }
    
    public function connect() {
        $this->connection = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->datebase);
        $this->connection->set_charset("utf8");
        
        if ($this->connection->connect_error) {
            die("Polaczenie nieudane. Blad: " . $conn->connect_error);
        } else {
            return $this->connection;
        }
    } 
    
    public function close() {
        $this->connection->close();
    }
    
}
