
<?php
     require 'common1.php';
    $id = $_SESSION['ID'];
    $email = $_SESSION['Email'];
?>
<html>
    <head>
        <title>Products</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="C:\Users\User\Desktop\newindex\Assign_2\public_html\css2a.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         <?php
             $delete = "DELETE FROM `users_items` WHERE `users_items`.`user_id` = '$id' AND `users_items`.`item_id` = {$_GET["ID"]}";
             
             echo "$id"."{$_GET["ID"]}";
             echo "Vishwajith";
             
             
       
         ?>
    </body>
</html>