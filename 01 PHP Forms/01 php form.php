<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in PHP</title>
</head>
<body>
    <h1>Form in PHP</h1>
    <form action="01welcome.php" method="POST">
        <label for="name">Name : </label>
        <input type="text" name="name" id="name" placeholder="Enter your name" require />

        <br /><br />

        <label for="email">Email : </label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required />

        <br /><br />

        <input type="submit" value="Enter">
    </form>
</body>
</html>