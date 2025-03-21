<?php
    echo "The time is " . date("H:i:sa");
?>
<br /><br />
<?php
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa");
?>