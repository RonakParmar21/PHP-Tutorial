<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor Function in PHP</title>
</head>
<body>
    <h1>Constructor Function in PHP</h1>
    <?php 
        class Fruit {
            public $name;
            public $color;

            function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            }

            function get_name() {
                return $this->name;
            }

            function get_color() {
                return $this->color;
            }
        }

        $apple = new Fruit("apple", "red");
        echo $apple->get_name();
        echo "<br />";
        echo $apple->get_color();

    ?>
</body>
</html>