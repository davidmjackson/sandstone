<?php 

// database include and object instantiation 
require 'includes/database/database.php';

$db = new database();

$db->debug = false;

$db->connect('localhost', 'admin', 'admin', 'sandbox');

// system variables 

?>