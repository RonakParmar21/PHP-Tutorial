<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Constants</title>
</head>
<body>
    <h1>Magic Constants</h1>
    <p>PHP has nine predefined constants that change value depending on where they are used, also called the "magic constants".</p>
    <p>These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.</p>

    <h1>__CLASS__ :- </h1>
    <p>If used inside a class, the class name is returned.</p>
    <?php 
        class Fruits {
          public function myValue(){
            return __CLASS__;
          }
        }
        $kiwi = new Fruits();
        echo $kiwi->myValue();
    ?>

    <h1>__DIR__ :- </h1>
    <p>The directory of the file.</p>
    <?php
        echo __DIR__;
    ?>

    <h1>__FILE__ :- </h1>
    <p>The file name including the full path.</p>
    <?php
        echo __FILE__;
    ?>

    <h1>__FUNCTION__ :- </h1>
    <p>If inside a function, the function name is returned.</p>
    <?php
        function myValue(){
            return __FUNCTION__;
        }
        echo myValue();
    ?>

    <h1>__LINE__ :- </h1>
    <p>	The current line number.</p>
    <?php
        echo __LINE__;
    ?>

    <h1>__METHOD__ :- </h1>
    <p>If used inside a function that belongs to a class, both class and function name is returned.</p>
    <?php
        class Fruits1 {
            public function myValue1(){
                return __METHOD__;
            }
        }
        $kiwi = new Fruits1();
        echo $kiwi->myValue1();
    ?>

    <h1>__NAMESPACE__ :- </h1>
    <p>If used inside a namespace, the name of the namespace is returned.</p>
    <?php
        /*namespace myArea;
        function myValue(){
            return __NAMESPACE__;
        }*/
    ?>
    <?php
        // echo myValue();
    ?>

    <h1>__TRAIT__ :- </h1>
    <p>If used inside a trait, the trait name is returned.</p>
    <?php
        trait message1 {
            public function msg1() {
                echo __TRAIT__; 
            }
        }
        class Welcome {
            use message1;
        }
        $obj = new Welcome();
        $obj->msg1();
    ?>

    <h1>ClassName::class :- </h1>
    <p>Returns the name of the specified class and the name of the namespace, if any.</p>
    <?php
        // namespace myArea;

        // class Fruits {
        //     public function myValue(){
        //         return Fruits::class;
        //     }
        // }
    ?>
    <?php
        // $kiwi = new Fruits();
        // echo $kiwi->myValue();
    ?>
 
</body>
</html>