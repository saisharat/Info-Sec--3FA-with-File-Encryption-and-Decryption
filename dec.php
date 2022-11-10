<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Decryption of file</title>
    <style media="screen">
      h1 {
        text-align: center;

      }
    </style>

  </head>
  <body>

  </body>
</html>

<?php

 include('config.php');


header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$myfile = $_GET['myfile'];

$cmdx = "java -cp . DecMain " .$myfile;

exec($cmdx, $output);
$outputs = implode(' ', $output);
echo $outputs;
echo "<br>";
echo "<h1>Your File has been decrypted successfully!!!</h1>";
echo "<a href= http://localhost/cse3502proj/cencryptordecrypt.html>Back</a>";

?>
