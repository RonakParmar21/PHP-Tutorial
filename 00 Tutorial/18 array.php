<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array in PHP</title>
</head>
<body>
    <h1>Array in PHP</h1>
    <?php 
        $cars = array("BMW", "KIA", "TATA");
        foreach ($cars as $val) {
            echo $val . "<br />";
        }
        echo $cars[0] = "Volvo";
        echo $cars[1] = "BMW";
        echo $cars[2] = "Toyota";

        array_push($cars, "MARUTI");
        echo "<br /><br />";
        foreach ($cars as $val) {
            echo $val."<br />";
        }
        echo "<br /><br />";
        echo count($cars);
        echo "<br /><br />";
        var_dump($cars);
    ?>

    <h1>Associative Arrays :- </h1>
    <p>Associative arrays are arrays that use named keys that you assign to them.</p>
    <?php 
        $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

        // var_dump($car);
        // echo $car['model'];
        // $car["year"] = 2024;
        // var_dump($car)
        
        foreach ($car as $x => $y) {
            echo "$x : $y <br/>";
        }
    ?>

    <h1>Create Array :- </h1>
    <p>You can create arrays by using the array() function : </p>
    <?php 
        $cars = array("Volvo", "BMW", "Toyota");
        echo $cars;
    ?>

    <h1>Multiple Lines :- </h1>
    <p>Line breaks are not important, so an array declaration can span multiple lines : </p>
    <?php
        $cars = [
          "Volvo",
          "BMW",
          "Toyota"
        ];
        var_dump($cars);        
    ?>

    <h1>Trailing Comma :- </h1>
    <p>A comma after the last item is allowed:</p>
    <?php
        $cars = [
            "Volvo",
            "BMW",
            "Toyota",
        ];
        var_dump($cars);
    ?>

    <h1>Array Keys :- </h1>
    <p></p>
</body>
</html>