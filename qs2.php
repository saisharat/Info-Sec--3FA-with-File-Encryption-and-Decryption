<?php
session_start();
$name=$_SESSION['username'];
$password=$_SESSION['password'];
    include('config.php');
    $hashed=hash('sha256',$_SESSION['password']);
    $qs2=$_POST['qs2'];
    $sql2="SELECT * FROM userdetails where lucky='$qs2'and name = '$name' and password = '$hashed'";

    $result2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $count2 = mysqli_num_rows($result2);

    if($count2 == 1){

            // header('Location: http://localhost/CSE3501PROJ/USER_AUTHENTICATION_SYSTEM-LEVEL3.html');
              echo "<h1><center> Authentication successful </center></h1>";
    }
    else{
        echo "<h1><center> Login failed. Invalid Answer.</center></h1>";

    }
    ?>
