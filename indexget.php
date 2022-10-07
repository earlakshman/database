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
        //create query
        $sql="SELECT * FROM sampletable";
        //Query run
        $result=mysqli_query($conn,$sql);
        // Check Results how many record in table
        $resultCheck=mysqli_num_rows($result);
        //if number of result>0
        if($resultCheck>0){
            //print the result while loop
            while($row=mysqli_fetch_assoc($result)){
                echo $row['Name']."|".$row['Address']."|".$row['Sex']."|".$row['NIC']."|".$row['Contact']."<br>";


            }
        }
    ?>
</body>
</html>