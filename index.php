<?php
include 'includes/config.php';
include 'includes/access.class.php';

$acc = new access($host, $username, $password, $database);

if(isset($_POST['username']) && isset($_POST['password'])){
    
   $sql = "SELECT account_userid,account_firstname,account_lastname,account_username,account_type,account_status FROM account_users WHERE account_username=? AND account_password=?";
    
   $result = $acc->login($sql,$_POST);
         
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