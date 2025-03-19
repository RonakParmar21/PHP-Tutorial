<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo and print</title>
</head>
<body>
    <h1>Echo And Print</h1>

    <!-- 
        echo and print are more or less the same. 
        They are both used to output data to the screen.

        The differences are small: 
            - echo has no return value while print has a return value of 1 so it can be used in expressions. 
            - echo can take multiple parameters (although such usage is rare) while print can take one argument. 
            -echo is marginally faster than print.
    -->
    <?php
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        
        echo '<h2>' . $txt1 . '</h2>';
        echo '<p>Study PHP at ' . $txt2 . '</p>';
    ?>

    <h1>Ex : </h1>
    <?php 
        $name = 'Linus';
        echo '<h1>Hello $name</h1>';
        echo "<h1>Hello $name</h1>";
    ?>

    <h1>Ex :- </h1>
    <?php 
        $name = 'Linus';
        print '<h1>Hello $name</h1>';
        print "<h1>Hello " . $name . "</h1>";
    ?>
</body>
</html>