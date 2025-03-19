<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math in PHP</title>
</head>
<body>
    <h1>Math in PHP </h1>

    <h1>pi() Function</h1>
    <?php 
        echo pi();
    ?>

    <h1>min() and max() Functions</h1>
    <?php 
        echo(min(0, 150, 30, 20, -8, -200));
        echo "\n\n";
        echo(max(0, 150, 30, 20, -8, -200));
    ?>

    <h1>abs() Function :- </h1>
    The abs() function returns (positive) value of a number:
    <?php 
        echo(abs(-6.7));
    ?>

    <h1>sqrt() Function</h1>
    <?php 
        echo(sqrt(64));
    ?>

    <h1>round() Function </h1>
    The round() function rounds a floating-point number to its nearest integer:
    <?php 
        echo "<br />";
        echo(round(0.60));
        echo "<br />";
        echo(round(0.49));
    ?>

    <h1>Random Numbers</h1>
    <?php 
        echo(rand());
    ?>  
</body>
</html>