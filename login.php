<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
     require 'common1.php';
?>
<html>
    <head>
        <title>Login</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="C:\Users\User\Desktop\newindex\Assign_2\public_html\css2a.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <?php
        include 'header.php';
        ?> <style>
<?php include 'C:\wamp64\www\PhpProject1\style.php'; ?>
        </style>
        
        <div>
            <br> <br> <br> <br> <br> <br><br> <br> <br> <br>  
        </div> 
        
        <div>
            <form class="col-xs-offset-3 panel panel-primary col-xs-5" method="POST" action="login_submit.php">
                      <div class="panel panel-heading">   &emsp;&emsp;&emsp;<b>LOG IN</b></div>
                      <div class="panel panel-body">
                          <form class="form-control form-group text-warning">
                          Login to purchase...<br><br>
                          <input name="email" placeholder="E-mail" type="email" required><br><br>
                          <input required name="password" type="password" placeholder="Password"><br><br>
                          <button class="btn btn-primary btn-lg"> Login</button><br><br>
                          </form>
                          <div class="panel panel-footer">
                              Don't have an account?<a href="#" id="reg">Register</a>
                          </div>
                      </div>
                  </form>    
        </div> 
        
        <div>
            <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br>
        </div> 
        
         <?php
      include 'footer.php';
      ?>
    </body>
</html>
