<!-- Check if a number is a palindrome. -->

<?php 
    function palindromornot($number) {
        $originalNumber = $number; 
        $reversedNumber = 0; 
    
        while ($number > 0) {
            $digit = $number % 10; 
            $reversedNumber = $reversedNumber * 10 + $digit; 
            $number = intdiv($number, 10); 
        }
    
        if ($originalNumber === $reversedNumber) {
            echo "Palindrome";
        } else {
            echo "Not Palindrome";
        }
    }

    palindromornot(151);
?>