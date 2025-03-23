<!-- Count the number of vowels and consonants in a string. -->

<?php 
function countVowelsAndConsonants($str) {
    $str = strtolower($str);

    $vowels = 0;
    $consonants = 0;
    $vowelList = ['a', 'e', 'i', 'o', 'u'];

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if (ctype_alpha($char)) {
            if (in_array($char, $vowelList)) {
                $vowels++;
            } else {
                $consonants++;
            }
        }
    }

    echo "Total Vowels: $vowels<br>";
    echo "Total Consonants: $consonants<br>";
}

    $str = "Hello, World!";
    countVowelsAndConsonants($str);
?>
