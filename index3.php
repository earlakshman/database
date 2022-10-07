<?php 
    include "conect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected database</title>
</head>
<body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <!--Get user form-->
    <form action="" method="POST">
        <input type="text" name="Name" id="" placeholder="Name"><br>
        <input type="text" name="Address" id="" placeholder="Address"><br>
        <input type="text" name="Sex" id="" placeholder="Sex"><br>
        <input type="text" name="NIC" id="" placeholder="NIC"><br>
        <input type="text" name="Contact" id="" placeholder="Contact"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_POST['submit'])){



            $name=mysqli_real_escape_string($conn,$_POST['Name']);
            $address=mysqli_real_escape_string($conn,$_POST['Address']);
            $sex=mysqli_real_escape_string($conn,$_POST['Sex']);
            $NIC=mysqli_real_escape_string($conn,$_POST['NIC']);
            $contact=mysqli_real_escape_string($conn,$_POST['Contact']);

            $sql="INSERT INTO sampletable(Name,Address,Sex,NIC,Contact) VALUES('$name','$address','$sex','$NIC','$contact')";
            if(mysqli_query($conn,$sql)){
                echo "secessess input date";
            }

        }
       
    ?>
</body>
</html>