<?php

include 'includes/init.php';

if(isset($_POST['username']) && isset($_POST['password'])){
    
  $db->query('SELECT account_userid,account_firstname,account_lastname,account_username,account_type,account_status FROM account_users WHERE account_username=? AND account_password=?',$_POST);
  
  $records = $db->fetch_assoc_all();
   
  if($records[0]['account_userid']>0){
           
      session_start();
      
      $_SESSION['userid'] = $records['account_userid'];
      
      header("location:system/dashboard.php");
      exit();
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
        
        <?php echo $_SESSION['userid']; ?>
        
        <form action="index.php" method="post">
            
            <input type="text" name="username" />
            <input type="password" name="password" />
            <input type="submit" />

        </form>
        
    </body>
    
</html>