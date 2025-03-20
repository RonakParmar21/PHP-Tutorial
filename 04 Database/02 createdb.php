<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Database in PHP</title>
</head>
<body>
    <h1>Create Database in PHP</h1>
    <?php 
        $host = "localhost";
        $user = "root";
        $pass = "";

        $conn = mysqli_connect($host, $user, $pass);

        if(!$conn) {
            echo "Fail to connect";
        }

        $create_db = "CREATE DATABASE first";
        if(mysqli_query($conn, $create_db)) {
            echo "Database create succefully.";
        } else {
            echo "Fail to create database";
        }
    ?>
</body>
</html>