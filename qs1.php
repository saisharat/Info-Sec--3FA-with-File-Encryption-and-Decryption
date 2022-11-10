<?php
session_start();
$name=$_SESSION['username'];
$password=$_SESSION['password'];
    include('config.php');
    $hashed=hash('sha256',$_SESSION['password']);

$qs1=$_POST['qs1'];

$sql1="SELECT * FROM userdetails where vehicle='$qs1'and name = '$name' and password = '$hashed'";

$result1 = mysqli_query($con, $sql1);
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
        $count1 = mysqli_num_rows($result1);

        if($count1 == 1){
            echo "<h1><center> Authentication successful </center></h1>";
            // header('Location: http://localhost/CSE3501PROJ/USER_AUTHENTICATION_SYSTEM-LEVEL3.html');

        }
        else{
            echo "<h1><center> Login failed. Invalid Answer.</center></h1>";



        }

?>
