<?php
function addMatrices($A, $B) {
    $rows = count($A);
    $cols = count($A[0]);
    $result = [];

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $result[$i][$j] = $A[$i][$j] + $B[$i][$j];
        }
    }
    return $result;
}

// Example Matrices
$A = [
    [1, 2, 3],
    [4, 5, 6]
];
$B = [
    [7, 8, 9],
    [10, 11, 12]
];

echo "Addition Result: <br>";
print_r(addMatrices($A, $B));
?>
