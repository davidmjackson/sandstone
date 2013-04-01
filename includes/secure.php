<?php

include 'config.php';
include 'access.class.php';

$acc = new access($host, $username, $password, $database);

$secure = $acc->secure();

if($secure===FALSE){
    
    header("location:/index.php");
    exit();
}



?>
