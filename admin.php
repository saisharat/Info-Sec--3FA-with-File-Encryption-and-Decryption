<?php
$user=$_POST['Username'];
$password=$_POST['Password'];
$userf="Admin2001";
$passwordf="Admin2001!!@";
if($user==$userf && $password==$passwordf){


header('Location: http://localhost/CSE3502PROJ/admin1.php');
}
else{
  echo "<br />
  <br />
  <br /><h1><center>
  Login failed !! <br />Invalid username and password.
  </center></h1>";
}
?>
