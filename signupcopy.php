<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
     require 'common1.php';
    if(isset($_SESSION['Email'])){
        header('location: productscopy.php');        
    }
?>
<html>
    <head>
        <title>Signup</title>
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
        ?> <style>
<?php include 'C:\wamp64\www\PhpProject1\style.php'; ?>
        </style>
        
        <div>
            <br> <br> <br> <br> <br> <br><br> 
        </div>
               
                <div class="col-xs-offset-5 col-xs-5 input-lg" id="fm">
                    <form action="Signup_script.php" method="POST">
            <h3> Sign up</h3>
            <input  name="name" pattern="[a-zA-Z]+"title="Use letters only..." placeholder="Name:" required><br><br>
            <input  name="Email" title="Use a valid e-mail ID..." type="email" placeholder="E-mail:" required><br><br>
            <input  name="password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password:"><br><br>
            <input  name="contact" pattern="{10}" title="Use only numbers" type="numbers" placeholder="Phone:" required><br><br>
            <input  name="city" pattern="[a-zA-Z]+" title="Use only alphabets" placeholder="City:" required><br><br>
            <input  name="address" type="address" placeholder="Address:" required><br><br>
                <button class="btn btn-primary btn-lg"> Submit</button></form>
        </div>
       
        <div>
            <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br><br> <br> <br><br> <br><br> <br> <br><br> 
        </div>
        
         <?php
      include 'footer.php';
      ?>
        
    </body>
</html>
