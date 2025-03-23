<!-- Remove duplicates from an array. -->

<?php 
    $array = [10, 2, 3, 7, 8, 11, 10, 12];
    $uniqueArray = array_unique($array);
    $array1 = [];
    $length = count($array);

    for($i = 0; $i < $length; $i++) {
        if(!in_array($array[$i], $array1)) {
            array_push($array1, $array[$i]);
        }
    }

    echo "Original Array: ";
    print_r($array);
    echo "<br/><br/>";

    echo "Array After Removing Duplicates: ";
    print_r($array1);
    echo "<br/><br/>";

    echo "Array After Removing Duplicates: ";
    print_r($uniqueArray);
?>


<?php 
//     $array = [10, 2, 3, 7, 8, 11, 10, 12];
//     $array1 = [];
//     $num = 0;
//     $length = count($array);
//     for($i=0;$i<$length;$i++) {
//         $num = $array[$i];
//         if($num != $array[$i]) {
//             $array1_push($array1, $num);
//         }
//     }
//     print_r($array);
//     echo "<br/><br/>";
//     print_r($array1);
?>