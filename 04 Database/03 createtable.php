<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create table inside database</title>
</head>
<body>
    <h1>Create table inside database</h1>
    <?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "first";

        $conn = mysqli_connect($host, $user, $pass, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";

        if(mysqli_query($conn, $sql)) {
            echo "Table created succesfully";
        } else {
            echo "faild to create table";
        }
    ?>
</body>
</html>