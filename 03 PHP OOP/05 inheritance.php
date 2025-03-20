<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <h1>Inheritance in PHP</h1>
    <?php 
        // class Fruit {
        //     public $name;
        //     public $color;

        //     public function __construct($name, $color) {
        //         $this->name = $name;
        //         $this->color = $color;
        //     }

        //     public function intro() {
        //         echo "This fruit is {$this->name} and the color is {$this->color}";
        //     }
        // }

        // class Straberry extends Fruit {
        //     public function message() {
        //         echo "Am I a fruit or a berry?";
        //     }
        // }

        // $straberry = new Straberry("Straberry", "red");
        // $straberry->message();
        // $straberry->intro();
    ?>

    <h1>Protected Inhertance</h1>
    <?php 
        class Fruit {
            public $name;
            public $color;
            public function __construct($name, $color) {
              $this->name = $name;
              $this->color = $color; 
            }

            protected function intro() {
              echo "The fruit is {$this->name} and the color is {$this->color}. <br/>"; 
            }
        }
          
        class Strawberry extends Fruit {
            public function message() {
                echo "Am I a fruit or a berry?<br/>"; 
                $this -> intro();
            }
        }
        $strawberry = new Strawberry("Apple", "red");  
        $strawberry->message(); 
        // $strawberry->intro(); // ERROR. intro() is protected
    ?>
</body>
</html>