<?php
    $localhost = "localhost:3310";
    $username = "root";
    $password = "";
    $dbname = "contact_book";

    try{
        $con = mysqli_connect($localhost, $username, $password, $dbname); //connect to database
    }catch(Exception $ex){
        echo "Error: " . $ex->getMessage(); //display error message
    }
?>