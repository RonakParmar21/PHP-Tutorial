<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Class in PHP</title>
</head>
<body>
    <h1>Abstract class in PHP</h1>
    <?php 
        abstract class Car {
            public $name;
            public function __construct($name) {
                $this->name = $name;
            }

            abstract public function intro() : string; 
        }

        class Audi extends Car {
            public function intro() : string {
                return "Choose German quality! I'm an $this->name!"; 
            }
        }

        class Volvo extends Car {
            public function intro() : string {
                return "Proud to be Swedish! I'm a $this->name!"; 
            }
        }

        class Citroen extends Car {
            public function intro() : string {
                return "French extravagance! I'm a $this->name!"; 
            }
        }

        $audi = new Audi("Audi");
        echo $audi -> intro();
        echo "<br/>";

        $volvo = new Volvo("Volvo");
        echo $volvo -> intro();
        echo "<br/>";

        $citroen = new Citroen("Citroen");
        echo $citroen -> intro();
        echo "<br/>";

        abstract class ParentClass {
            abstract protected function prefixName($name);
        }

        class ChildClass extends ParentClass {
            public function prefixName($name, $saperator=".", $greet="Dear") {
                if($name == "Ronak Parmar") {
                    $prefix = "Mr";
                } elseif ($name == "Jane Doe") {
                    $prefix = "Mrs";
                } else {
                    $prefix = "";
                }
                return "{$greet} {$prefix}{$saperator} {$name}";
            }
        }

        $class = new ChildClass();
        echo $class -> prefixName("Ronak Parmar");
        echo "<br/>";
        echo $class -> prefixName("Jane Doe");
    ?>
</body>
</html>