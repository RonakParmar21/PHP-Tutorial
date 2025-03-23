<!-- 
1 
1 2 
3 4 5 
12 13 14 15 
54 55 56 57 58 
-->


<?php

$rows =5;
$sum_prev =0;

for ($i=1; $i <=$rows; $i++){
    if ($i ==1){
        $start =1;
        $elements = range($start, $start);
        $sum_prev = array_sum($elements);
    } elseif ($i ==2) {
        $start =1;
        $elements = range($start, $start +1);
        $sum_prev = array_sum($elements);
    } else {
        $start = $sum_prev;
        $elements = range($start, $start + ($i -1));
        $sum_prev = array_sum($elements);
    }
    $leadingSpaces = str_repeat(' ', $rows - $i);
    echo $leadingSpaces;
    echo implode(' ', $elements) . "<br/>";
}

?>

<?php
    // $sum = 0;
    // for($i=1;$i<=5;$i++) {
    //     $sum += $i;
    //     for($j=1;$j<=$i;$j++) {
    //         echo $sum . " ";
    //         $sum++;
    //     }
    //     $sum = 0;
    //     echo "<br />";
    // }
?>