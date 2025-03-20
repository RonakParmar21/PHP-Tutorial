<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Properties in PHP</title>
</head>
<body>
    <h1>Static Properties in PHP</h1>
    <?php
        class pi {
            public static $value=3.14159;
        }

        class x extends pi {
            public function xStatic() {
                return parent::$value;
            } 
        }

        // Get value of static property directly via child class
        echo x::$value;


        // Get value of static property via xStatic() method
        $x = new x();
        echo $x->xStatic();
    ?>
</body>
</html>