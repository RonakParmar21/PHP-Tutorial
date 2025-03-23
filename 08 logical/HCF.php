<?php
function findHCF($a, $b) {
    if ($b == 0) {
        return $a;
    }
    return findHCF($b, $a % $b);
}

// Example
$num1 = 36;
$num2 = 60;
echo "HCF of $num1 and $num2 is: " . findHCF($num1, $num2);
?>
