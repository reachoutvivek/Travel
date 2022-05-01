<?php

$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `iiitk_travel`.`tbl_west` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
   //$sql= "INSERT INTO `iiitk_travel`.`tbl_south` ( `name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('1', 'S. Vivek Reddy', '19', 'male', 'reachout.sunny@yahoo.com', '9441918146', 'this is just a try', current_timestamp()), (NULL, '', '', '', '', '', '', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
         background-repeat: no-repeat;
         background-size:100% 100%;
     }
    </style>
</head>
<body background="west.jpg">
    <!--<img class="image" src="bg.jpg" alt="iiitkottayam">-->
 <div class="container">
     <h1>Welcome to IIIT Kottayam West-India Tour Form</h1>
    <!-- <p>Wanna check out the most beautiful places and piligrimages of North-India?? join us</p>-->
     <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the IIITK West-India trip</p>";
        }
    ?>
     <form action="west.php" method="post">
         <input type="text" name="name" id="name" placeholder="Enter Your Name">
         <input type="text" name="age" id="age" placeholder="Enter your age">
         <input type="text" name="gender" id="gender" placeholder="Enter your gender">
         <input type="email" name="email" id="email" placeholder="Enter your email">
         <input type="tel" name="phone" id="phone" placeholder="Enter your phone">
         <textarea name="desc" id="desc" cols="30" rows="5" placeholder="Enter Anymore information"></textarea>
         <button class="btn">Submit</button>
         
     </form>
 </div>   

</body>
</html>