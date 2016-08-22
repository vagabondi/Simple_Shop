<?php
require_once 'config.php';

require_once (__DIR__. '../../src/Item.php');



$dbConn=new mysqli($dbhost, $dbuser, $dbpass, $datebase);
$dbConn->set_charset("utf8");
if ($dbConn->connect_error) {
    die("Polaczenie nieudane. Blad: " . $conn->connect_error);
}

$item= new Item($dbConn);




