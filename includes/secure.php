<?php

include 'config.php';
include 'access.class.php';

// connect to database 
$acc = new access($host, $username, $password, $database);

// check security
$secure = $acc->secure();

// test access and redirect if unauthorised.
if($secure===FALSE){
    
    header("location:/index.php");
    exit();
}

// logout and destroy sessions
if(isset($_GET['logout'])){
    
    session_destroy();
    
    unset($_SESSION);
    
    header("location:/index.php");
    exit();
}

?>