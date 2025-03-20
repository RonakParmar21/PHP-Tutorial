<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants</title>
</head>
<body>
    <h1>PHP Constants</h1>
    <!-- 
        Constants are like variables, except that once they are defined they cannot be changed or undefined.

        A valid constant name starts with a letter or underscore (no $ sign before the constant name).

        Note: Unlike variables, constants are automatically global across the entire script.

        To create a constant, use the define() function.

        Syntax :- 
            define(name, value);
            Parameters:
                - name: Specifies the name of the constant
                - value: Specifies the value of the constant
    -->
    <?php 
        define("GREETING", "Welcome to W3Schools.com!");
        // define("GREETING", "HELLO WORLD!");
        echo GREETING;
    ?>

    <h1>const Keyword</h1>
    <!-- 
        You can also create a constant by using the const keyword.
    -->
    <?php 
        const MYCAR = "Volvo";
        echo MYCAR;
    ?>

    <h1>Different Between define and const keyword</h1>
    const vs. define()
    const cannot be created inside another block scope, like inside a function or inside an if statement. <br />
    define can be created inside another block scope.

    <h1>Constant Arrays</h1>
    From PHP7, you can create an Array constant using the define() function. <br />
    <?php 
        define("cars", [
            "Alfa Romeo",
            "BMW",
            "Toyota"
          ]);
          echo cars[0];
    ?>

    <h1>Constants are Global</h1>
    Constants are automatically global and can be used across the entire script. <br />
    <?php 
        define("GREETING1", "Welcome to W3Schools.com!");
        function myTest() {
          echo GREETING1;
        }
        myTest();
    ?>

</body>
</html>