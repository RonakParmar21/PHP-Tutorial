<!-- Generate the Fibonacci series up to n terms. -->

<?php 
    function fibo($number) {
        $n = 0;
        $n1 = 1;
        $sum = $n + $n1;
        echo $sum . " ";
        for($i=1;$i<=$number; $i++) {
            $n1 = $n;
            $n = $sum;
            $sum = $n + $n1;
            echo $sum . " ";
        }
    }

    $n = 10;
    fibo($n);
?>  