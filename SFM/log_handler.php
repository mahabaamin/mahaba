<?php
$email = $_POST["email"];
$password = $_POST["password"];

$con = mysqli_connect("localhost:3306","root","") or die ("error: can't connect to server");
$db = mysqli_select_db($con,"SFM") or die ("error: can't connect to database");

//get the data from database table
$login = "SELECT email,password FROM users WHERE email= '$email' and password= '$password'";

//check + security
//injuction
$stmt = mysqli_prepare($con, $login);
mysqli_stmt_bint_param($stmt,"ss",$email,$password);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
$count = mysqli_stmt_num_rows($stmt);

if($count == 1){
  session_start();
  $_SESSION["loggedUser"] = $email;
  header('location: profile.php');
}
else {
  echo "invalid email or passwrod";
}
?>
