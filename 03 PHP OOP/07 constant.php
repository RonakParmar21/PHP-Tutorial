<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contant in PHP</title>
</head>
<body>
    <h1>Constant in PHP</h1>
    <?php
        // class Goodbye {
        //     const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
        // }

        // echo Goodbye::LEAVING_MESSAGE;

        class Goodbye {
            const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
            public function byebye() {
                 echo self::LEAVING_MESSAGE;
            }
        }
          
        $goodbye = new Goodbye();
        $goodbye->byebye();
    ?>
</body>
</html>