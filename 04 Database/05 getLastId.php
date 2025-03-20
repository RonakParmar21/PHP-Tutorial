<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert record in PHP</title>
</head>
<body>
    <h1>Insert operation</h1>
    <?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "first";

        $conn = mysqli_connect($host, $user, $pass, $dbname);

        if(!$conn) {
            echo "Failed to connect";
        }

        $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

        if(mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            echo "New record created successfully. Last inserted ID is: " . $last_id;
            echo "Record inserted...";
        } else {
            echo "Failed to insert record...";
        }
    ?>
</body>
</html>