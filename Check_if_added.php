<?php

function check_if_added($item_id){
    $con = mysqli_connect("localhost","root","","e_commerce");
    $id_user = $_SESSION['ID'];
    $query = "SELECT * FROM users_items ui WHERE ui.item_id='$item_id' AND ui.user_id ='$id_user' AND status= 'Added to cart'";
    $join = mysqli_query($con, $query);
    $num = mysqli_num_rows($join);
     if($num >= 1){
         return 1;
     }       else{
         return 0;
     }
}
?>
