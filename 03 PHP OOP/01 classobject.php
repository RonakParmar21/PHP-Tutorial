<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Object</title>
</head>
<body>
    <h1>Class Object in PHP</h1>
    <?php 
        class Fruit {
            public $name;
            public $color;

            function set_name($name) {
                $this -> name = $name;
            }

            function get_name() {
                return $this -> name;
            }

            function set_color($color) {
                $this -> color = $color;
            }

            function get_color() {
                return $this -> color;
            }
        }

        $apple = new Fruit();
        $apple -> set_name("apple");
        $apple -> set_color("red");

        echo $apple -> get_name();
        echo "<br /><br />";
        echo $apple -> get_color();
        echo "<br /><br />";
        var_dump($apple instanceof Fruit);
    ?>
</body>
</html>