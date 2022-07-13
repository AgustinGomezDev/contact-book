<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="https://images.emojiterra.com/google/noto-emoji/v2.034/512px/1f4da.png" type="image/png">
    <title>Contact book</title>
</head>
<body>
    <h1>Contact book</h1>
    <h2>New contact</h2>
    <form action="includes/create.php" method="POST">
        <input type="text" name="name" id="name" placeholder="Name" required>
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="number" name="number" id="number" placeholder="Number">
        <input type="submit" name="register" id="register" value="Send">
    </form>
    <h2>Contacts</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "includes/db.php"; //connect to database
                $sql = "SELECT * FROM contact"; //select all the data from the table
                $result = mysqli_query($con, $sql); //execute the query
                while($row = mysqli_fetch_assoc($result)){ //loop through the data
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['number'] . "</td>";
                    echo "<td> <a class='delete' href='includes/delete.php?id=" . $row['id'] . "'>Delete</a> </td>";
                    echo "<td> <a class='update' href='includes/update.php?id=" . $row['id'] . "'>Update</a> </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <footer>
       <p>Made by: <a href="https://github.com/AgustinGomezDev" target="__blank">Agustín Gómez</a></p>
    </footer>
</body>
</html>