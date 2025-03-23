<!-- Find the second largest element in an array. -->

<?php 

    $array = [10, 2, 3, 7, 8, 11, 10, 12];
    $max = $smax = 0;

    $lenght = count($array);

    for($i=0;$i<$lenght;$i++) {
        if($array[$i] > $max) {
            $smax = $max;
            $max = $array[$i];
        } 
        // elseif ($array[$i] > $xmax and $array[$i] != $max) {
        //     $xmax = $array[$i];
        // }
    }

    echo "Max : ".$max." second max = ".$smax;





// second way ------------------------
    // function findSecondLargest($arr) {
    //     $n = count($arr);
    
    //     if ($n < 2) {
    //         return "Array must have at least two elements.";
    //     }
    
    //     $first = $second = PHP_INT_MIN;
    
    //     foreach ($arr as $num) {
    //         if ($num > $first) {
    //             $second = $first;
    //             $first = $num;
    //         } elseif ($num > $second && $num != $first) {
    //             $second = $num;
    //         }
    //     }
    
    //     return ($second == PHP_INT_MIN) ? "No second largest element found." : $second;
    // }

    // $arr = [12, 35, 1, 10, 34, 1];
    // echo "Second Largest Element: " . findSecondLargest($arr);
?>