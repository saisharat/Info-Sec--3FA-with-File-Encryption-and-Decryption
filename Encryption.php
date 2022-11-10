<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Encryption</title>
  <style media="screen">
    h1 {
      text-align: center;

    }
  </style>
</head>
<body style="background-color: #EEEDDE;">
<?php
 include('config.php');



header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

?>

<h1>Upload Your File to Encrypt!</h1>

<form action="enc.php" enctype="multipart/form-data">
  <label for="myfile">Select a file:</label>
  <input type="file" id="myfile" name="myfile"><br><br>
  <input type="submit" value="Encrypt File">
</form>
<br>
  <a href= http://localhost/cse3502proj/cencryptordecrypt.html>Back</a>

</body>
</html>
