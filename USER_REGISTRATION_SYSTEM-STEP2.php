<?php
session_start();
$_SESSION['name']=$_POST['username'];
$_SESSION['pass']=$_POST['password'];
$_SESSION['birthday']=$_POST['birthday'];
$_SESSION['gender']=$_POST['gender'];
$_SESSION['email']=$_POST['email'];
$_SESSION['address']=$_POST['address'];
$_SESSION['phonenumber']=$_POST['phone'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;


}
.container{

    margin: auto;
    height: 100%;
    width: 100%;
    display: flex;
    position: fixed;


}
.btn{
    margin-left:120px;
  height:40px;
  width:130px;
color:white;
font-family: 'Lobster', cursive;
background-color:black;
border-radius:20px;
font-size:20px;
border:2px solid black

}
form{
font-size:20px;
font-weight:bold;
margin-left:500px;
}



.bg{
    width: 100%;
    height:100%;
    position: absolute;
    z-index: -1;
    opacity:0.9;

}
h2{
  margin-left:350px;
}
h1{
  /* margin-top:60px; */
  margin-left:270px;
}
.textbox{
  height:35px;
  width:245px;
  margin-left:120px;
  margin-top:12px;
  border:2px solid black;
  border-radius:20px;
}

.bod{
  font-family: 'Lobster', cursive;
}

</style>
<body class="bod" onload="document.form1.lucky.focus()">
<img src="images/regs2_bg.jpg" class="bg" alt="">
<br />
<br />
<br />

<h1>&emsp;&emsp;&emsp;&emsp;3 Level Password Authentication System</h1>

<h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;User Registration Form <br />&emsp;&emsp;&emsp;&emsp;
  (Step-2: Personalised Security Questions)</h2>
<br>
<form name="form1"action="index.php" method="post">
<label>Question-1:What is the make and model of the <br />&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;vehicle, you first drove in??</label>
<br>

<input type="text" class="textbox" name="vehicle" value="">
<br> <br>
<label>Question-2:  What is your 3 digit lucky number ?</label>
<br>
<input type="text"  class="textbox" name="lucky" value="">


</script>
<br>
<br>
<label >Question-3: How many moles do you have? </label>
<br>
<input onclick="stringlength(document.form1.lucky,3)" type="text" class="textbox" name="last" value="">
<br>
<br>
<button class="btn">Submit</button>
<!-- <form action="USER_REGISTRATION_SYSTEM-STEP2.html" method="post">
<input type="submit" name="" value="Next">
</form> -->
</center>
</form>



</body>
</html>
