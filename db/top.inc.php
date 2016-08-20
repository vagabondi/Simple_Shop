<?php
require_once 'config.php';
require_once 'src/Datebase.php';
require_once 'src/Item.php';



$dbConn=new Connect_db($dbhost, $dbuser, $dbpass, $datebase);
$item= new Item($dbConn);
