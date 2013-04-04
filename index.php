<?php
include 'includes/config.php';
include 'includes/access.class.php';

$acc = new access($host, $username, $password, $database);

if(isset($_POST['username']) && isset($_POST['password'])){
    
    
   $result = $acc->login($_POST);
         
    if($result[0]['account_userid']>0){

      $secure = $acc->secure($result);

      if($secure){
          
        header("location:system/dashboard.php");
        exit();
      
      }
   }
}

?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    
    <body>
        
                
        <form action="index.php" method="post">
            
            <input type="text" name="username" />
            <input type="password" name="password" />
            <input type="submit" />

        </form>
        
    </body>
    
</html>