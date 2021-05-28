<?php
require 'common1.php';
$email=$_POST['Email'];
$query1 = "SELECT ID, Email FROM users u WHERE u.Email ='$email'";
$join1 = mysqli_query($con,$query1);
$fetch1 = mysqli_fetch_array($join1);
$num_match = mysqli_num_rows($join1);
if($num_match > 0)
    {
    echo "Registered email!!!";
    
}else{
   $contact= $_POST['contact'];
$city=$_POST['city'];
$name=$_POST['name'];
$address=$_POST['address'];
$email = mysqli_real_escape_string($con, $_POST['Email']);
$pass = mysqli_real_escape_string($con, $_POST['password']);
$password =  md5($pass);
$query = "INSERT INTO `users` (`ID`, `Name`, `Email`, `Password`, `Contact`, `City`, `Adress`) VALUES (NULL, '$name', '$email', '$pass', '$contact', '$city', '$address')";
$join = mysqli_query($con, $query);
 $_SESSION['Email']= $email;
 $_SESSION['ID']= mysqli_insert_id($con);
 
    
     header('location: productscopy.php');
     
}
?>

