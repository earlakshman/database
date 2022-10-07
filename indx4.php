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

//using prepared statemnt

            $name=mysqli_real_escape_string($conn,$_POST['Name']);
            $address=mysqli_real_escape_string($conn,$_POST['Address']);
            $sex=mysqli_real_escape_string($conn,$_POST['Sex']);
            $NIC=mysqli_real_escape_string($conn,$_POST['NIC']);
            $contact=mysqli_real_escape_string($conn,$_POST['Contact']);

            $sql="INSERT INTO sampletable(Name,Address,Sex,NIC,Contact) VALUES(?,?,?,?,?)";
            
            //create prepare statemts
            $stmt=mysqli_stmt_init($conn);
            //prepare the prepaered statemnt
            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo "SQL Stetemt fial";
            }
            else{
                    //bind the parameters to the place holders
                    mysqli_stmt_bind_param($stmt,"sssss",$name,$address,$sex,$NIC,$contact);
                    //Run parametr inside tyhe datbase
                    mysqli_stmt_execute($stmt);
                    echo "SQL Stetemt secess";
            }
            

        }
       
    ?>
</body>
</html>