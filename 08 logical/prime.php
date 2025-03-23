<!-- Check if a given number is a prime number. -->

<?php 
    function isPrime($number) {
        if($number <= 1) {
            return false;
        }

        for($i=2;$i<=sqrt($number);$i++) {
            if($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    $num = 20;
    if(isPrime($num)) {
        echo $num . " is prime number";
    } else {
        echo $num . " is not prime number";
    }
?>