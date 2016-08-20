<?php
require_once 'config.php';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $datebase);

$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Polaczenie nieudane. Blad: " . $conn->connect_error);
}
