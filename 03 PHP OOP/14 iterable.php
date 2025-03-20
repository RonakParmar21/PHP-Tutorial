<?php
    function getIterable():iterable {
        return ["a", "b", "c"];
    }

    $myIterable = getIterable();
    foreach($myIterable as $item) {
        echo $item;
    }
?>

<?php
    function printIterable(iterable $myIterable) {
        foreach($myIterable as $item) {
            echo $item;
        }
    }

    $arr = ["a", "b", "c"];
    printIterable($arr);
?>