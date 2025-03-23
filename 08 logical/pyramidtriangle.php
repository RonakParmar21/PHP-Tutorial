<!-- 
    Print a pyramid or number triangle using loops. 
        *
       * *
      * * *
     * * * *
    * * * * *        
-->

<?php 
    for($i=1;$i<=5;$i++) {
        for($j=5;$j>=$i;$j--) {
            echo "&nbsp;&nbsp;";
        }

        for($j=1;$j<=$i;$j++) {
            echo "* &nbsp;";
        }
        echo "<br />";
    }
?>