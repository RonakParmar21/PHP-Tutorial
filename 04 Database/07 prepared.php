<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepared</title>
</head>
<body>
    <h1>Prepared</h1>
    <?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "first";

        $conn = mysqli_connect($host, $user, $pass, $dbname);

        if(!$conn) {
            echo "Failed to connect.";
        }

        $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $firstname, $lastname, $email);

        // set parameters and execute
        $firstname = "John";
        $lastname = "Doe";
        $email = "john@example.com";
        $stmt->execute();

        $firstname = "Mary";
        $lastname = "Moe";
        $email = "mary@example.com";
        $stmt->execute();

        $firstname = "Julie";
        $lastname = "Dooley";
        $email = "julie@example.com";
        $stmt->execute();

        echo "New records created successfully";
    ?>
</body>
</html>