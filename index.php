<?php

include 'includes/init.php';

$db->select(
    'email, address2',
    'sandbox'
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
        
        <?php 
        
        print_r($records);
        
        ?>

    </body>
</html>