<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scope</title>
</head>
<body>
    <h1>Variable Scope</h1>
    <?php 
        $x = 5;

        function myFunc() {
            echo "variable x inside function ", $x;
        }

        myFunc();
        echo "variable x outside function", $x;
    ?>

        <h1>Global variable</h1>
    <!-- 
        GLOBAL VARIABLE :-
        The global keyword is used to access a global variable from within a function.
    -->
    <?php 
            $y = 5;

        function myFuncGlobalVariable() {
            global $y;
            echo "variable x inside function ", $y;
        }

        myFuncGlobalVariable();
        echo "variable x outside function", $y;
    ?>

    <h1>global array</h1>
    <?php
        $name = 'Linus';
        function myTest() {
          $GLOBALS['name'] = 'Tobias';
        }
        myTest();
        echo $name;
    ?>
</body>
</html>