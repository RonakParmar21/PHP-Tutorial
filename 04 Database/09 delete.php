<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
</head>
<body>
    <h1>Delete Record</h1>
    <?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "first";

        $conn = mysqli_connect($host, $user, $pass, $dbname);

        if(!$conn) {
            echo "Failed to connect.";
        }

        $sql = "DELETE FROM MyGuests WHERE id=3";
        if(mysqli_query($conn, $sql)) {
            echo "Record deleted...";
        } else {
            echo "Failed to delete records";
        }
    ?>
</body>
</html>