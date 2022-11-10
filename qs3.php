<?php
session_start();

$name=$_SESSION['username'];
$password=$_SESSION['password'];
    include('config.php');
    $hashed=hash('sha256',$_SESSION['password']);


    $qs3=$_POST['qs3'];
    $sql3="SELECT * FROM userdetails where last='$qs3'and name = '$name' and password = '$hashed'";

    $result3 = mysqli_query($con, $sql3);
    $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
    $count3 = mysqli_num_rows($result3);

    if($count3 == 1){
        echo "<h1><center> Authentication successful </center></h1>";
            // header('Location: http://localhost/CSE3501PROJ/USER_AUTHENTICATION_SYSTEM-LEVEL3.html');
    }
    else{
      echo "<h1><center> Login failed. Invalid Answer.</center></h1>";

    }
    ?>
