<?php
 
    $uname=$_GET['username'];
   
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $uname;?>Document</title>
</head>
<body>
  <form action="" method="get">
    <input type="text" name="username">
    <input type="text" name="address">
    <input type="submit" value="send">
  </form>
 <h1> 
  <?php
 
    $uname=$_GET['username'];
    echo $uname. " Good morning";
  ?>
  </h1>

</body>
</html>