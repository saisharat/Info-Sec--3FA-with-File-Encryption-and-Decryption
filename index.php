<?php
session_start();

 include('config.php');

$insert = false;
if(isset($_SESSION['name'])){


 // Collect post variables
$name =$_SESSION['name'];
$password=$_SESSION['pass'];
$hashed=hash('sha256',$password);
$email =$_SESSION['email'];
$birthday =$_SESSION['birthday'];
$number =$_SESSION['phonenumber'] ;
$gender=$_SESSION['gender'];
$address=$_SESSION['address'];


$vehicle=$_POST['vehicle'];
$lucky=$_POST['lucky'];
// last question
$last=$_POST['last'];


$sql="INSERT INTO `cse3502proj`.`userdetails` (`name`, `password`, `email`, `birthday`, `number`, `gender`, `address`, `vehicle`, `lucky`, `last`, `timestamp`)
 VALUES ('$name', '$hashed', '$email', '$birthday', '$number', '$gender', '$address', '$vehicle','$lucky','$last',current_timestamp())";

 if($con->query($sql) == true){

   $insert=true;
  echo "<center><h1>Registration Succesfull!<h1><center>";
  print("<img src=images/thank-removebg-preview.png>");
  echo"<br>";
  echo "<a href= http://localhost/cse3502proj/starting.html>Back to Home Page</a>";
}
else{
    echo "Error:<br> $con->error";
}

 $con->close();
 }
