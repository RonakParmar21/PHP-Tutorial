<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Required Form in PHP</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    
    <?php 
        $nameerr = $emailerr = $addresserr = $gendererr = "";
        $name = $email = $address = $gender = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["name"])) {
                $nameerr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                if(!preg_match("/^[a-zA-Z-']*$/", $name)) {
                    $nameerr = "Only characters are required.";
                }
            }

            if(empty($_POST["email"])) {
                $emailerr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailerr = "Invalid Email";
                }
            }

            if(empty($_POST["address"])) {
                $addresserr = "Address is required";
            } else {
                $address = test_input($_POST["address"]);
            }

            if(empty($_POST["gender"])) {
                $gendererr = "Select one gender";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <label for="name">Name : </label>
        <input type="text" name="name" id="name" placeholder="Enter your name" />
        <span class="error">* <?php echo $nameerr;?></span>

        <br /><br />

        <label for="email">Email : </label>
        <input type="email" name="email" id="email" placeholder="Enter your email" />
        <span class="error">* <?php echo $emailerr ?></span>

        <br /><br />

        <label for="address">Address : </label>
        <textarea name="address" id="address" cols="30" rows="10"></textarea>
        <span class="error">* <?php echo $addresserr ?></span>

        <br /><br />

        <label for="gender">Gender : </label>
        <input type="radio" name="gender" id="gender" value="male" /> Male
        <input type="radio" name="gender" id="gender" value="female" /> Female
        <span class="error">* <?php echo $gendererr ?></span>
        <br /><br />

        <input type="submit" value="Send">

    </form>

    <?php 
        echo "<h1>Your Data is : </h1>";
        echo "Name is : " . $name;
        echo "<br />";
        echo "Email is : " . $email;
        echo "<br />";
        echo "Address is : " . $address;
        echo "<br />";
        echo "Gender is : " . $gender;
        echo "<br />";
    ?>
</body>
</html>