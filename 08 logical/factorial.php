<!-- Calculate the factorial of a number. -->
<?php
    function fact($number) {
        if($number < 0) {
            return "Invalid number";
        } 
        if($number <= 1) {
            return 1;
        }
        return $number * fact($number - 1);
    }
    echo "Factorial of 5 is : " . fact(5);
?>