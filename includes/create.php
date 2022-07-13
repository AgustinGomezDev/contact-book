<?php

    include "db.php"; //connect to database
    try{
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number'])){ //if the form is submitted
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['number'];
    
            $sql = "INSERT INTO contact (name, email, number) VALUES ('$name', '$email', '$number')"; //insert the data into the database
            $result = mysqli_query($con, $sql); //execute the query
        }
    }catch(Exception $ex){
        echo "Error: " . $ex->getMessage(); //display error message
    }


?>
<link rel="stylesheet" href="../styles.css">
<link rel="shortcut icon" href="https://images.emojiterra.com/google/noto-emoji/v2.034/512px/1f4da.png" type="image/png">
<div>
    <h1>Contact entered correctly!</h1>
    <a href="../index.php">Back to homepage</a>
</div>