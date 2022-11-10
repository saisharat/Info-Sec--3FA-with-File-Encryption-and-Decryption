<?php
  include('config.php');
require_once 'vendor/autoload.php';
if(isset($_POST['login'])){
    $number=$_POST['num'];
    $name=$_POST['name'];
    $sql="SELECT * FROM `userdetails` WHERE name='$name' and number='$number'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
    $otp=mt_rand(100000,999999);
    setcookie("otp",$otp);
	$mssg = "Hello ".$name."!!". " "."It is a One Time Password, use it only once"." ". "Your OTP is" ." ".$otp ;
    $MessageBird = new \MessageBird\Client('zxIDNnch6QX0eoOdazYuYaVou');
  $Message = new \MessageBird\Objects\Message();
  $Message->originator = 'TestMessage';
  $Message->recipients = $number;
  $Message->body = $mssg;
  $MessageBird->messages->create($Message);
  echo "<h2><center>Succesfull Validation of phone number!!!Please enter the OTP</center></h2>";
}
      else{

          echo "<h1> Login failed. Invalid number.</h1>";
      }
}

if(isset($_POST['ver'])){
    $verotp=$_POST['otp'];
    if($verotp==$_COOKIE['otp']){
      // header('Location: http://localhost/CSE3501PROJ/login_dummy_page.html');
      echo "<h1><center>OTP Authentication successful </center></h1>";

    }
}
?>


<!-- Laxmi-
Key: VuUnRoBQ5HpuHpr757XZvv3vtCOPY
ID:  e4adcd17-debc-44f7-84db-1e57d1866d27
Sharat-
Key: HNWZ4LIVezBhZqXSsAad2qqsRCOPY
ID:  ab353c87-0f03-4c98-9490-a1ce11ce350aCO

zxIDNnch6QX0eoOdazYuYaVou
-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CSE3501-JCOMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <style>
  .btn{
  color:white;
  background-color: black;
    height:40px;
    width:130px;
  font-family: 'Lobster', cursive;
  border-radius:20px;
  font-size:20px;
  border:2px solid black

  }
  body{
    font-family: 'Lobster', cursive;
  }
label{
  font-size: 20px;
  font-weight: bold;
}
input{

 height:30px;
 width:220px;
 border:2px solid black;
 border-radius:15px;
}

img{
  margin-left:-123px;
}
.bg{
  height:105%;
}
body{
  background-color: #F7F7F7;
}

  </style>
  <body>

    <div class="container">
      <div class="row">
        <div class="col img">
        <img src="images/AuthLevel3.jpg" class="bg" alt="">
        </div>

        <div class="col">

          <br />
          <br />

    <br>
    <h2><b>3 Level Password Authentication &emsp; &emsp;  &emsp; &emsp; &emsp;
      System</b></h2>
    <h4><b> &emsp; &emsp;&emsp; User Authentication System<br />  &emsp; &emsp;(Level-3: One Time Password)</b></h4>
<center>
  <form action="otp.php" method="post">
    <label>Username: </label>
    <input type="text" name="name" value="">
    <br>
      <br>
    <label>Phone Number: </label>
 <input type="text" name="num" placeholder="With valid countrycode" >
 <br>
 <br>

<input type="submit" class="btn" name="login" value="Submit">
<br>
<br>
 <label>Enter OTP: </label>
 <input type="text" name="otp" id="otp"  onclick="otp_timer()"placeholder="Enter received otp" >
 <br />
 <div>Time left = <span id="timer"></span></div>

<br>
 <input type="submit" class="btn" name="ver" value="Verify" required>
 <script src="otp.js" charset="utf-8"></script>
</center>
</form>
</div>

</div>

  </body>
</html>
