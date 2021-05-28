<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Success</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="C:\Users\User\Desktop\newindex\Assign_2\public_html\css2a.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         <?php
        include 'header.php';
        ?>
        <style>
<?php include 'C:\wamp64\www\PhpProject1\style.php'; ?>
        </style>
         <br> <br> <br> <br> <br> <br> <br> <br><br><br>
         
         
         
         <?php if(!isset($_SESSION('Email'))){
         header('location: index.php');}
         else{
             
         }
         ?>
         
         
         
         
         <div class="container text-center"><h3>Your order is confirmed. Thank you for shopping
             with us.<br><a id="ch"  href="C:\Users\User\Desktop\newindex\Assign_2\public_html\products.html"> Click here</a> to purchase any other item.</h3>
         </div>  <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br><br> <br> <br><br> 
          <?php
      include 'footer.php';
      ?>
    </body>
</html>