<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overriding Inheritance</title>
</head>
<body>
    <h1>Overriding Inheritance in PHP</h1>

    <?php 
        class Fruit {
            public $name;
            public $color;
            public function __construct($name, $color) {
              $this->name = $name;
              $this->color = $color;
            }
            public function intro() {
              echo "The fruit is {$this->name} and the color is {$this->color}.<br/><br/>";
            }
        }

        class Strawberry extends Fruit {
            public $weight;
            public function __construct($name, $color, $weight) {
              $this->name = $name;
              $this->color = $color;
              $this->weight = $weight;
            }
            public function intro() {
              echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram. <br/><br/>";
            }
        }

        $strawberry = new Strawberry("Strawberry", "red", 50);
        $strawberry->intro();
    ?>
</body>
</html>