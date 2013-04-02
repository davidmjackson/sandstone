<?php

include 'config.php';
include 'access.class.php';

$acc = new access($host, $username, $password, $database);

$secure = $acc->secure();

if($secure===FALSE){
    
    header("location:/index.php");
    exit();
}

if(isset($_GET['logout'])){
    
    session_destroy();
    
    unset($_SESSION);
    
    header("location:/index.php");
    exit();
}

?>