<?php
// Convert Binary to Decimal
function binaryToDecimal($binary) {
    return bindec($binary);
}

// Example
$binary = "11001";
echo "Binary: $binary <br>";
echo "Decimal: " . binaryToDecimal($binary);
?>
