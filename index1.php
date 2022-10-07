<?php 
    include "conect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <?php
        //Inset normal value insert in to table
        //create query
        $sql="INSERT INTO sampletable(Name,Address,Sex,NIC,Contact) VALUES('Rav2344','Galle','Male','666666','666666')";
        if (mysqli_query($conn,$sql)){
            echo "seccess insert ok";
        }

       
    ?>
</body>
</html>