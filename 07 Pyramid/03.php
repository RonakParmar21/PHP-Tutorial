<!-- 
A 
A B 
A B C 
A B C D  
A B C D E 
-->

<?php 
for ($i = 65; $i <= 69; $i++) {
    for ($j = 65; $j <= $i; $j++) {
        echo chr($j) . " ";
    }
    echo "<br />";
}
?>
