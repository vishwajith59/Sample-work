<?php

include 'common1.php';
$user_id = $_SESSION['ID'];
$item_id = $_GET['item_id'];
$insert ="INSERT INTO users_items (user_id, item_id, Status) VALUES('$user_id', '$item_id', 'Added to cart')";
$join = mysqli_query($con, $insert);
 header('location: productscopy.php');
?>

