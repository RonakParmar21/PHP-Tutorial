<!-- Find the sum of digits of a number. -->

<?php 
    function sumOfDigit($number) {
        $sum = 0;

        while($number > 0) {
            $digit = $number % 10; 
            $sum = $sum + $digit; 
            $number = intdiv($number, 10);
        }
        return $sum;
    }

    $n = 1234;
    echo "Sum of ".$n." is : ".sumOfDigit($n);
?>