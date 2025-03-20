<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Modifier in PHP</title>
</head>
<body>
    <h1>Access Modifier in PHP</h1>
    <?php 
        class Fruit {
            public $name;
            protected $color;
            private $weight;
        }

        $mango = new Fruit();
        $mango->name='Mango';
        // $mango->color='yello'; // give error
        // $mango->weight=300; // give error
    ?>
</body>
</html>