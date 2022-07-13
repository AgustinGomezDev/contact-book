<?php
    include "db.php"; //connect to database

    $sql = "DELETE FROM contact WHERE id='$_GET[id]'"; //delete the data from the database
    $result = mysqli_query($con, $sql); //execute the query
?>
<link rel="stylesheet" href="../styles.css">
<link rel="shortcut icon" href="https://images.emojiterra.com/google/noto-emoji/v2.034/512px/1f4da.png" type="image/png">
<div>
    <h1>Contact deleted correctly!</h1>
    <a href="../index.php">Back to homepage</a>
</div>