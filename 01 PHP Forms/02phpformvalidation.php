<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation in PHP</title>
</head>
<body>
    <h1>Form validation in PHP</h1>

    <?php 
        $name = $email = $gender = $address = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $address = test_input($_POST["address"]);
            $gender = test_input($_POST["gender"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $address;
        echo "<br>";
        echo $gender;
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <label for="name">Name : </label>
        <input type="text" name="name" id="name" placeholder="Enter your name" />

        <br /><br />
        
        <label for="email">Email : </label>
        <input type="email" name="email" id="email" placeholder="Enter your email" />

        <br /><br />

        <label for="address">Address : </label>
        <textarea name="address" id="address" cols="30" rows="10"></textarea>

        <br /><br />

        <label for="gender">Gender : </label>
        <input type="radio" name="gender" id="gender" value="male" /> Male
        <input type="radio" name="gender" id="gender" value="female" /> Female

        <br /><br />

        <input type="submit" value="Send">

    </form>
</body>
</html>