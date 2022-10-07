<?php 
    include "conect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select the data using prepared statmet</title>
</head>
<body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <!--Get user form-->
    <form action="" method="POST">
        <input type="text" name="keyword" id="" placeholder="Name"><br>
        <input type="submit" name="btnfind" value="Find">
    </form>
    <?php
        if(isset($_POST['btnfind'])){
            $keyword=$_POST['keyword'];
//using prepared statemnt
$sql="SELECT * FROM sampletable WHERE Name=?";

           

          
            
            //create prepare statemts
            $stmt=mysqli_stmt_init($conn);
            //prepare the prepaered statemnt
            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo "SQL Stetemt fial";
            }
            else{
               //Bind the parameters
               mysqli_stmt_bind_param($stmt,"s",$keyword);
               // rub partmeter
               mysqli_stmt_execute(($stmt));
               //get the data
               $result= mysqli_stmt_get_result($stmt);
               //print result
               while($row=mysqli_fetch_assoc($result)) {
                echo $row['Name']."|".$row['Address']."|".$row['Sex']."|".$row['NIC']."|".$row['Contact']."<br>";
                
               }  
            }
            

        }
       
    ?>
</body>
</html>