<?php
require 'common1.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$pass = mysqli_real_escape_string($con, $_POST['password']);
$password =  md5($pass);
$query = "SELECT u.ID ,u.Email FROM users u WHERE u.Email = '$email' AND u.Password ='$pass'";
$join = mysqli_query($con, $query);
$num_rows = mysqli_num_rows($join); 
if($num_rows==0){
    echo "Not registered user. Click register.";
}else{
    $fetch = mysqli_fetch_array($join);
    $_SESSION['Email']= $email;
    $_SESSION['ID']= $fetch['ID'];
     header('location: productscopy.php');
}
?>

