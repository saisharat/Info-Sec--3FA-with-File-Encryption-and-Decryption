<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Encryption</title>

    <style media="screen">
      h1 {
        text-align: center;

      }
    </style>


</head>
<body>
  <body>
      <form action="enc.php" method="post" enctype="multipart/form-data">
          <h1>Upload Your File to Encrypt!</h1>
          <label for="fileSelect">Filename:</label>
          <input type="file" name="file1" id="file1" value="<?php echo $res['file1']; ?>">
          <p><strong>Click Here to Encrypt your File...</strong></p>
          <input type="submit" name="enc" value="Encrypt File">



      </form>
      <br>
      <br>
      <!-- <form class="" action="" method="post">
        <h3>Click Here to encrypt your file...</h3>
        <input type="submit" name="submit" value="Decrypt File">
      </form> -->
      <br>
      <a href="http://localhost/cse3502proj/login_dummy_page.html">Back</a>
</body>
</html>
