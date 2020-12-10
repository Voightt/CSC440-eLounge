<?php

$db_eLounge = "Students";
$db_name = "eLounge";

$db = new PDO("mysql:host=localhost;dbname=" . $db_name . ';charset=utf8', $dbuser, $db_pass); 
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
