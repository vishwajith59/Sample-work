<?php
     require 'common1.php';
    
?>
<html>
    <head>
        <title>Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="C:\Users\User\Desktop\newindex\Assign_2\public_html\css2a.css">
    </head>
    <body>
       <?php
        include 'header.php';
        ?>
        <style>
<?php include 'C:\wamp64\www\PhpProject1\style.php'; ?>
        </style>
        <?php 
$user_id = $_SESSION['ID'];
$sum = 0;
$a=0; $b=0; $c=0;
$id[] = ' ';
$id1 = ' ';
$name[] = ' ';
$name1 = ' ';
$cost[] = ' ';
$cost1 = ' ';
$query = "SELECT i.ID, i.Name, i.Price, ui.Status  FROM items i INNER JOIN users_items ui ON i.ID = ui.item_id INNER JOIN users u ON u.ID= ui.user_id WHERE u.ID = '$user_id'";
$result= mysqli_query($con,$query);
$num_rows = mysqli_num_rows($result);
if($num_rows == 0){?> <br><br><br><?php
echo "Add items to the cart first...";
}else{

while($fetch = mysqli_fetch_array($result)){
$sum = $sum + $fetch['Price']; 
$id[$a] = $fetch['ID'];
$a++;
 $name[$b] = $fetch['Name'];
$b++;
$cost[$c] = $fetch['Price'];
$c++;
}
$id1 = implode(", ",$id);
$name1 = implode(",   <a href='cart_remove.php?ID={$fetch['ID']}' > Remove</a>",$name);
$cost1 = implode(", ",$cost);
}
?>
        <br> <br> <br> <br> <br> <br> <br><br> <br> 
        <div class="container">
            <table class="table table-striped table-hover table-bordered table-responsive">
                <tbody>
                    <tr><th> Item no: </th> <th> Item name: </th> <th> Price: </th> <th> </th></tr>
                    <tr><th> <?php echo "$id1"; ?> </th> <th> <?php echo "$name1"; ?><a href='cart_remove.php?ID={$fetch[$a-1]}'> Remove</a> </th> <th> <?php echo "$cost1"; ?> </th> <th> </th></tr>
                    <tr><th>  </th> <th> Total:</th> <th>Rs.<?php echo "$sum"; ?>/- </th><th> <center><?php  if($num_rows==0){
                        
                    
                        ?><button class="btn btn-primary" disabled> Confirm order</button><?php } else{ ?>
                        <button class="btn btn-primary" > Confirm order</button><?php } ?>
                </center> </th></tr>
                </tbody>
            </table>
        </div>
        <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br><br> <br> 
        <?php
      include 'footer.php';
      ?>
    </body>
</html>