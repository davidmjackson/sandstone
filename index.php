<?php

include 'includes/init.php';

$db->select(
    'username, firstname, lastname',    //<-fields
    'users'                             //<-table
);

$records = $db->fetch_assoc_all();


?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    
    <body>
        
        <form action="" method="">
            
            <input type="text" name="username" />
            <input type="password" name="password" />
            <input type="submit" />

        </form>
        
    </body>
    
</html>