<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String in PHP</title>
</head>
<body>
    <h1>Strings in PHP :- </h1>


    <h3>Length Function : return length of the string</h3>
    <?php
        echo strlen("Hello world!");
    ?>

    <h3>Word Count : str_word_count() function counts the number of words in a string.</h3>
    <?php 
        echo str_word_count("Hello World!");
    ?>

    <h3>Search For Text Within a String : strpos() function searches for a specific text within a string.</h3>
    <h4>If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.</h4>
    <?php 
        echo strpos("Hello world!", "He");
        echo strpos("Hello World!", "nice");
    ?>

    <h3>Upper Case :- The strtoupper() function returns the string in upper case:</h3>
    <?php 
        $x = "Hello World!";
        echo strtoupper($x);
    ?>

    <h3>Lower Case :- The strtolower() function returns the string in lower case:</h3>
    <?php
        $x = "Hello World!";
        echo strtolower($x);
    ?>

    <h3>Replace String :- The PHP str_replace() function replaces some characters with some other characters in a string.</h3>
    <?php 
        $x = "Hello World!";
        echo str_replace("World", "Dolly", $x);
    ?>

    <h3>Reverse a String :- The PHP strrev() function reverses a string.</h3>
    <?php 
        $x = "Hello World!";
        echo strrev($x);
    ?>

    <h3>Remove Whitespace :- Whitespace is the space before and/or after the actual text, and very often you want to remove this space.</h3>
    <?php 
        $x = " Hello World! ";
        echo trim($x);
    ?>

    <h3>Convert String into Array :- The PHP explode() function splits a string into an array.

    The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.</h3>
    <?php 
        $x = "Hello World!";
        $y = explode(" ", $x);
        print_r($y);
    ?>

    <h1>--------------------------------------------------------</h1>
    <h3>String Concatenation</h3>
    <p>To concatenate, or combine, two strings you can use the . operator:</p>
    <?php 
        $x = "Hello";
        $y = "World";
        $z = $x . " " . $y;
        echo $z;

        $a = 5;
        $b = 10;
        $c = $a . $b;
        echo $c;
    ?>

    <h1>Slicing :- </h1>
    <p>
        You can return a range of characters by using the substr() function.
        Specify the start index and the number of characters you want to return.
        Note The first character has index 0.
    </p>
    <?php 
        $x = "Hello World!";
        echo substr($x, 4, 5);
    ?>

    <h1>Slice to the End :- </h1>
    <p>By leaving out the length parameter, the range will go to the end:</p>
    <?php 
        $x = "Hello World!";
        echo substr($x, 2); // llo World!
    ?>

    <h1>Slice From the End :- </h1>
    <p>
        Use negative indexes to start the slice from the end of the string:
        Note The last character has index -1.
    </p>
    <?php 
        $x = "Hello World!";
        echo substr($x, -5, 3); // orl
    ?>

    <h1>Negative Length :- </h1>
    <?php 
        $x = "Hi, how are you?";
        echo substr($x, 5, -3); // ow are y
    ?>

    <h1>Escape Character :- </h1>
    <p>
        To insert characters that are illegal in a string, use an escape character.

        An escape character is a backslash \ followed by the character you want to insert.

        \'	Single Quote	
        \"	Double Quote	
        \$	PHP variables	
        \n	New Line	
        \r	Carriage Return	
        \t	Tab	
        \f	Form Feed	
        \ooo	Octal value	
        \xhh	Hex value
    </p>
    <?php 
        $x = "We are the so-called \"Vikings\" from the north.";
        echo $x;
    ?>

</body>
</html>