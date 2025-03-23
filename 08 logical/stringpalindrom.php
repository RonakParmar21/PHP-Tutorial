<!-- Check if a string is a palindrome. -->

<?php 
    function isPalindrome($string) {
        // $cleanString = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $string));
        $cleanString = strtolower($string);
        
        $reversedString = strrev($cleanString);
    
        if ($cleanString === $reversedString) {
            return "The string '$string' is a palindrome.";
        } else {
            return "The string '$string' is not a palindrome.";
        }
    }
    
    // Example Test Cases
    echo isPalindrome("A man, a plan, a canal: Panama") . "<br>";
    echo isPalindrome("Hello") . "<br>";
    echo isPalindrome("Racecar") . "<br>";  
    echo isPalindrome("HeleH");
?>