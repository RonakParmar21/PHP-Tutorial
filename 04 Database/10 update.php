<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>
<body>
    <h1>Update Record</h1>
    <?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "first";

        $conn = mysqli_connect($host, $user, $pass, $dbname);
        if(!$conn) {
            echo "Failed to connect";
        }

        $sql = "UPDATE MyGuests SET lastname='OK' WHERE id=2";
        if(mysqli_query($conn, $sql)) {
            echo "Update success...";
        } else {
            echo "Failed to update";
        }
    ?>
</body>
</html>