<?php

$con = mysqli_connect("localhost", "root", "", "e_commerce") or die(mysqli_error($con));
$email = $_POST['Email'];
$Name = $_POST['Name'];
$password = $_POST['Password'];
$contact = $_POST['Contact'];
$City = $_POST['City'];
$adress = $_POST['Adress'];
$user_registration_query = "insert into users(ID, Email, Name, Password, Contact, City, Adress) values (8,'$email', '$Name', '$password', '$contact','$City','$adress')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
?>

