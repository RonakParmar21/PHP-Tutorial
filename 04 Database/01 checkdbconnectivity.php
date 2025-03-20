<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Database Connectivity</title>
</head>
<body>
    <h1>MySQL Connectivity</h1>
    <?php 
        $server = "localhost";
        $user = "root";
        $password = "";

        $conn = mysqli_connect($server, $user, $password);

        if(!$conn) {
            echo "Error";
        } else {
            echo "Connection succesfully";
        }

        // close connection
        mysqli_close($conn);
    ?>
</body>
</html>