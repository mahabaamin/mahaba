<?php
session_start();
if(!isset($_SESSION["loggedUser"])){
  header('location: login.php');
}
?>
<html>
<head>
  <title> profile</title>
</head>

<body>
  <?php
  $con = mysqli_connect("localhost:3306","root","") or die ("error: can't connect to server");
  $db = mysqli_select_db($con,"SFM") or die ("error: can't connect to database");
  $email = $_SESSION["loggedUser"];
  $viewUser = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($con,$viewUser);
  if(!$result){
    echo"error: ".mysqli_error($con);
  }
  $row = mysqli_fetch_array($result);

  $name = $row["name"];
  $country = $row["country"];
  $gender = $row["gender"];
   ?>
<p> user profile </p>

<label>Name: </label>
<p> <?php echo $name ?></p>

<label>email: </label>
<p> <?php echo $email ?></p>

<label>costumer: </label>
<p> <?php echo $country ?></p>

<label>gender: </label>
<p> <?php echo $radio ?></p>

<a href = "logout.php"> logout</a>
</body>
</html>
