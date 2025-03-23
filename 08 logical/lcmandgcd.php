<?php
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function lcm($a, $b) {
    return abs($a * $b) / gcd($a, $b);
}

$num1 = 12;
$num2 = 18;

$gcd = gcd($num1, $num2);
$lcm = lcm($num1, $num2);

echo "GCD of $num1 and $num2 is: $gcd\n";
echo "LCM of $num1 and $num2 is: $lcm\n";
?>