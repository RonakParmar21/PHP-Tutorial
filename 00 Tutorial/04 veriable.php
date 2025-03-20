<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable in PHP</title>
</head>
<body>
    <h1>Variables in PHP</h1>

    <!-- 
        In PHP, a variable starts with the $ sign, followed by the name of the variable:

        $a = 10;
        $name = "hello";

        Rules for PHP variables:-
        - A variable starts with the $ sign, followed by the name of the variable
        - A variable name must start with a letter or the underscore character
        - A variable name cannot start with a number
        - A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
        - Variable names are case-sensitive ($age and $AGE are two different variables)
    -->

    <?php 
        $x = 5;
        $y = 4;
        echo $x + $y;
    ?>

    <!-- 
        - In PHP 7, type declarations were added.

        PHP supports the following data types:
        --------------------------------------
        - String
        - Integer
        - Float (floating point numbers - also called double)
        - Boolean
        - Array
        - Object
        - NULL
        - Resource

        To get the data type of a variable, use the var_dump() function.
    -->
    <?php
        $x = 5;
        echo "<br /><br />";
        var_dump($x);
        echo "<br />";
        var_dump('ronak');
        echo "<br />";
        var_dump(12.45);
        echo "<br />";
        var_dump(true);
        echo "<br />";
        var_dump([2, 3, 56, 9, 'ronak']);
        echo "<br />";
        var_dump(null);
        echo "<br /><br />";
    ?>

    <!-- 
        Assigning multiple value
    -->
    <?php
        $x = $y = $z = "Fruit";
        echo $x;
        echo "<br />";
        echo $y;
        echo "<br />";
        echo $z;
    ?>
</body>
</html>