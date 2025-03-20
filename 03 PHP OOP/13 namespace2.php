<?php
include "13 namespace1.php";
use Html\Table as T;
$table = new T();
$table->title = "My table";
$table->numRows = 5;
?>

<html>
<body>

<?php $table->message(); ?>

</body>
</html>