<!-- Print a multiplication table of any number using loops. -->

<?php 
    function multiplicationTable($number) {
        for($i=1;$i<=10;$i++) 
            echo $number . " * ". $i ."=". $number*$i."<br/>";

    }
    $n = 5;
    multiplicationTable($n);
?>