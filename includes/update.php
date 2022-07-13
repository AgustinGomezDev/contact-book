<link rel="stylesheet" href="../styles.css">
<link rel="shortcut icon" href="https://images.emojiterra.com/google/noto-emoji/v2.034/512px/1f4da.png" type="image/png">
<div>
    <h1>Update the contact named
        <?php 
            include "db.php"; //connect to database

            $id = $_GET['id']; //get the id
            
            $sql = "SELECT name FROM contact WHERE id=$id"; //select the data from the database
            $result = mysqli_query($con, $sql); //execute the query
            while($row = mysqli_fetch_assoc($result)){ //loop through the data
                echo $row['name'];
            }
        ?></h1>
    <form action="update.php?id=<?php echo $id ?>" method="POST">
    <input type="text" name="name" id="name" placeholder="Name" required>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="number" name="number" id="number" placeholder="Number" required>
        <input type="submit" name="register" id="register" value="Send">
    </form>
    <a href="../index.php">Back to homepage</a>
</div>

<?php
    try{
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number'])){
            $name  = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['number'];
    
            $sql = "UPDATE contact SET name = '$name', email = '$email', number = '$number' WHERE id = $id"; 
            $result = mysqli_query($con, $sql); //execute the query

            ?>
            <div>
                <h1>Contact updated correctly!</h1>
                <a href="../index.php">Back to homepage</a>
            </div>
            <?php
        }
    }catch(Exception $ex){
        echo "Error: " . $ex->getMessage(); //display error message
    }

?>