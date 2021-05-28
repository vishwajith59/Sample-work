<!DOCTYPE html>
<?php
     require 'common1.php';
    
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
        include 'header.php';
        include 'check_if_added.php';
        ?>
        <style>
<?php include 'C:\wamp64\www\PhpProject1\style.php'; ?>

        </style>
        
        <br> <br> <br> <br> <br> 
        <div class="container">
                         <div class=" jumbotron " id="jumbo">
                         <h1>Welcome to our Lifestyle Store!!!</h1>
                         <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                         </div>
            <form method="GET" action="Cart_add.php"><div class="row text-center">
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="images\5.jpg" alt="1cam">
                    Cannon<br>
                        <?php
                        if (!isset($_SESSION['Email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added(1) > 0) 
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else { ?> <a href="Cart_add.php?item_id=1" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
                              <?php } } ?> Price:36,000/-<br>
                    
                </div> 
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="images\2.jpg" alt="1cam">
                    DSLR<br><?php if (!isset($_SESSION['Email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added(2)>0) 
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                               else { ?> <a href="Cart_add.php?item_id=2" name="item_id" value="2" class="btn btn-block btn-primary">Add to cart</a>
                              <?php } } ?>Price:45,000/-<br>
                    
                </div> 
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="images\3.jpg" alt="1cam">
                    Sony DSLR<br><?php if (!isset($_SESSION['Email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added(3)>0) 
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else { ?> <a href="Cart_add.php?item_id=3" name="item_id" value="3" class="btn btn-block btn-primary">Add to cart</a>
                              <?php } } ?>Price:50,000/-<br>
                   
                </div> 
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="images\4.jpg" alt="1cam">
                    Olympus EOS<br><?php if (!isset($_SESSION['Email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added(4)>0) 
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else { ?> <a href="Cart_add.php?item_id=4" name="item_id" value="4" class="btn btn-block btn-primary">Add to cart</a>
                              <?php } } ?>Price:65,000/-<br>
                   
                </div> 
            </div>  
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="images\9.jpg" alt="1cam">
                   Titan Mode 1<br><?php if (!isset($_SESSION['Email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added(5)>0) 
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else { ?> <a href="Cart_add.php?item_id=5" name="item_id" value="5" class="btn btn-block btn-primary">Add to cart</a>
                              <?php } } ?>Price:5,000/-<br>
                    
                </div> 
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="images\12.jpg" alt="1cam">
                    Titan Model #303<br><?php if (!isset($_SESSION['Email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added(6)>0) 
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else { ?> <a href="Cart_add.php?item_id=6" name="item_id" value="6" class="btn btn-block btn-primary">Add to cart</a>
                              <?php } } ?>Price:6,000/-<br>
                   
                </div> 
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="images\10.jpg" alt="1cam">
                    HMT<br><?php if (!isset($_SESSION['Email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added(7)>0) 
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else { ?><a href="Cart_add.php?item_id=7" name="item_id" value="7" class="btn btn-block btn-primary">Add to cart</a>
                              <?php } } ?>Price:8,000/-<br>
                    
                </div> 
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="images\11.jpg" alt="1cam">
                   Faber Luba #111<br><?php if (!isset($_SESSION['Email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added(8)>0) 
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else { ?> <a href="Cart_add.php?item_id=8" name="item_id" value="8" class="btn btn-block btn-primary">Add to cart</a>
                              <?php } } ?>Price:12,000/-<br>
                    
                </div> 
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="images\6.jpg" alt="1cam">
                    Jhalsani<br><?php if (!isset($_SESSION['Email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added(9)>0) 
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else { ?> <a href="Cart_add.php?item_id=9" name="item_id" value="9" class="btn btn-block btn-primary">Add to cart</a>
                              <?php } } ?>Price:800/-<br>
                    
                </div> 
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="images\8.0.png" alt="1cam">
                    John<br><?php if (!isset($_SESSION['Email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added(10)>0) 
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else { ?> <a href="Cart_add.php?item_id=10" name="item_id" value="10" class="btn btn-block btn-primary">Add to cart</a>
                              <?php } } ?>Price:1,000/-<br>
                   
                </div> 
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="images\14.jpg" alt="1cam">
                    H&M<br><?php if (!isset($_SESSION['Email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added(11)>0) 
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else { ?> <a href="Cart_add.php?item_id=11" name="item_id" value="11" class="btn btn-block btn-primary">Add to cart</a>
                              <?php } } ?>Price:1,050/-<br>
                    
                </div> 
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="images\13.jpg" alt="1cam">
                   Louis<br><?php if (!isset($_SESSION['Email'])) {
                        ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added(12)>0) 
                            {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else { ?> <a href="Cart_add.php?item_id=12" name="item_id" value="12" class="btn btn-block btn-primary">Add to cart</a>
                              <?php } } ?>Price:1,500/-<br>
                   
                </div> 
            </div></form>
        </div>
       <?php
      include 'footer.php';
      ?>
    </body>
</html>
