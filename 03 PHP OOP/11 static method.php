<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>static methods in PHP</title>
</head>
<body>
    <h1>static methods in PHP</h1>
    <?php 
        class domain {
            protected static function getWebsiteName() {
                return "W3Schools.com";
            }
        }
          
        class domainW3 extends domain {
            public $websiteName;
            public function __construct() {
                $this -> websiteName = parent::getWebsiteName();
            }	
        }
          
        $domainW3 = new domainW3;
        echo $domainW3 -> websiteName;
    ?>
</body>
</html>