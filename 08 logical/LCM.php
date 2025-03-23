<?php
function findHCF($a, $b) {
    if ($b == 0) {
        return $a;
    }
    return findHCF($b, $a % $b);
}

function findLCM($a, $b) {
    return abs($a * $b) / findHCF($a, $b);
}

// Example
$num1 = 36;
$num2 = 60;
echo "LCM of $num1 and $num2 is: " . findLCM($num1, $num2);
?>
