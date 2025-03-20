<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Records</title>
</head>
<body>
    <h1>Select records</h1>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "first";

        $conn = mysqli_connect($host, $user, $pass, $dbname);
        if(!$conn) {
            echo "Failed to connect.";
        }

        // $sql = "SELECT id, firstname, lastname FROM MyGuests";
        // $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
        // $sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
        $sql = "SELECT id, firstname, lastname FROM MyGuests LIMIT 3, 5";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "id : " . $row["id"] . " - Name : " . $row["firstname"] . " " . $row["lastname"] . "<br />";
            }
        } else {
            echo "0 results";
        }
    ?>
</body>
</html>