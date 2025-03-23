<?php
// Convert Decimal to Binary
function decimalToBinary($decimal) {
    return decbin($decimal);
}

// Example
$decimal = 25;
echo "Decimal: $decimal <br>";
echo "Binary: " . decimalToBinary($decimal);
?>
