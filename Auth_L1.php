
<?php
session_start();
$_SESSION['username']=$_POST['user'];
$_SESSION['password']=$_POST['pass'];
  include('config.php');
    $name=$_SESSION['username'];
    $password=$_SESSION['password'];
  $hashed=hash('sha256',$_SESSION['password']);
        //to prevent from mysqli injection
        $sql = "select * from userdetails where name = '$name' and password = '$hashed'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){

        header('Location: http://localhost/cse3502proj/cauthl2l3.html');
    }
        else{

            echo "<h1><center> Login failed. Invalid username or password.</center></h1>";
        }
?>
