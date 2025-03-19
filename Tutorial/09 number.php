<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers in PHP</title>
</head>
<body>
    <h1>Numbers in PHP</h1>
    <p>
        There are three main numeric types in PHP:
            - Integer
            - Float
            - Number Strings
            
        In addition, PHP has two more data types used for numbers:
            - Infinity
            - NaN
    </p>

    <?php 
        $a = 5;
        $b = 5.34;
        $c = "25";

        var_dump($a);
        var_dump($b);
        var_dump($c);
    ?>

    <h1>Float </h1>
    A float is a number with a decimal point or a number in exponential form.
    - PHP_FLOAT_MAX - The largest representable floating point number
    - PHP_FLOAT_MIN - The smallest representable positive floating point number
    - PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
    - PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0

    <?php 
        $x = 10.365;
        var_dump(is_float($x));
        // PHP_FLOAT_DIG($x);
    ?>

    <h1>PHP Infinity</h1>
    A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
    <?php 
        $x = 1.9e411;
        var_dump($x);
    ?>

    <h1>PHP NaN</h1>
    NaN stands for Not a Number.

    NaN is used for impossible mathematical operations.
    PHP has the following functions to check if a value is not a number:
    is_nan()

    <h1>PHP Numerical Strings</h1>
    The PHP is_numeric() function can be used to find whether a variable is numeric. 
    The function returns true if the variable is a number or a numeric string, false otherwise.
    <?php 
        $x = 5985;
        var_dump(is_numeric($x));
        
        $x = "5985";
        var_dump(is_numeric($x));
        $x = "59.85" + 100;
        var_dump(is_numeric($x));
        
        $x = "Hello";
        var_dump(is_numeric($x));
    ?>

    <h1>PHP Casting Strings and Floats to Integers</h1>
    Sometimes you need to cast a numerical value into another data type.

    The (int), (integer), and intval() functions are often used to convert a value to an integer.
    <?php 
        $x = 23465.768;
        $int_cast = (int)$x;
        echo $int_cast;
        
        echo "<br>";
        
        // Cast string to int
        $x = "23465.768";
        $int_cast = (int)$x;
        echo $int_cast;
    ?>
</body>
</html>