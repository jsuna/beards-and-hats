<?php

$user = 'root';
$pass = '';
$db = 'recipe';
$host = 'localhost';

$dbconnect = new mysqli ( $host, $user, $pass, $db ) or die("Unable to connect");

echo "Connected to database";

?>
