<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Insert</title>
</head>
<body>
    <h1>Multiple Insert</h1>
    <?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "first";

        $conn = mysqli_connect($host, $user, $pass, $dbname);

        if(!$conn) {
            echo "Failed to connect";
        }

        $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com');";
        $sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Mary', 'Moe', 'mary@example.com');";
        $sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Julie', 'Dooley', 'julie@example.com')";

        if(mysqli_multi_query($conn, $sql)) {
            echo "Inserted Multiple Records.";
        } else {
            echo "Failed to insert multiple records.";
        }
    ?>
</body>
</html>