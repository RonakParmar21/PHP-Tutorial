<!-- Reverse a given number. -->

<?php 
    function reverseANumber($number) {
        $revnum = 0;
        while ($number > 0) {
            $digit = $number % 10;
            $revnum = $revnum * 10 + $digit;
            $number = intdiv($number, 10);
        }
        return $revnum;
    }
    $n = 12344;
    echo "Reverse number of ".$n." is : ".reverseANumber($n);
?>