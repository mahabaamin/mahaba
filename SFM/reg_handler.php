<?php
//taking the var by post method
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$country = $_POST ["country"];
$gender = $_POST["radio-choice"];


//connectio to database
$con = mysqli_connect("localhost:3306","root","") or die ("error: can't connect to server");
$db = mysqli_select_db($con,"SFM") or die ("error: can't connect to database");

//insert to the database user tabel with the same columns order in database
$insertUser = "INSERT INTO users (name, email, password, country, gender) value('$name','$email','$password','$costumer','$gender')";

//create user
$result = mysqli_query($con, $insertUser);
if ($result){
  echo"<h3> user created successfully</h3>";
  echo"<a href = "login.php"> click here to login </a>";
}
else {
  echo"error: ".mysqli_error($con);
}
 ?>
