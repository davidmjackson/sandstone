<?php 

// database include and object instantiation 
require 'includes/database/database.php';

// database block
$db = "";

$db = new database();

$db->debug = TRUE;

$db->connect('localhost', 'admin', 'admin', 'scsnew');

// system variables 




?>
