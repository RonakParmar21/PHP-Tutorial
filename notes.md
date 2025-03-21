# Remaining notes

# 01 PHP Forms :- 
-----------------
#### GET vs. POST
- Both GET and POST create an array.
- This array holds key/value pairs, where keys are the names of the form controls and values are the input data from the user.
- Both GET and POST are treated as $_GET and $_POST.
- These are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

- $_GET is an array of variables passed to the current script via the URL parameters.
- $_POST is an array of variables passed to the current script via the HTTP POST method.

#### When to use GET?
- Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL).
- GET also has limits on the amount of information to send.
- The limitation is about 2000 characters.
- GET may be used for sending non-sensitive data.
- Note: GET should NEVER be used for sending passwords or other sensitive information!

#### When to use POST?
- Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request) and has no limits on the amount of information to send.
- Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.
- multi-part means image, pdf, videos like this....

### Form Validation :-
- SECURITY when processing PHP forms!


## What is the $_SERVER["PHP_SELF"] variable?
- The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.
- So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. 
- This way, the user will get error messages on the same page as the form.

## What is the htmlspecialchars() function?
- The htmlspecialchars() function converts special characters into HTML entities.
- This means that it will replace HTML characters like < and > with &lt; and &gt;.
- This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.

# NOTE THAT :- 
- The $_SERVER["PHP_SELF"] variable can be used by hackers!
- If PHP_SELF is used in your page then a user can enter a slash / and then some Cross Site Scripting (XSS) commands to execute.
### How To Avoid $_SERVER["PHP_SELF"] Exploits?
- $_SERVER["PHP_SELF"] exploits can be avoided by using the htmlspecialchars() function.
- EX. :- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

### Validate Form Data With PHP
- The first thing we will do is to pass all variables through PHP's htmlspecialchars() function.
- When we use the htmlspecialchars() function; then if a user tries to submit the following in a text field:
    - <script>location.href('http://www.hacked.com')</script>
- this would not be executed, because it would be saved as HTML escaped code, like this:
    - &lt;script&gt;location.href('http://www.hacked.com')&lt;/script&gt;

# 02 PHP Advanced :-
----------------------
## PHP Date and Time :-
### Date() Function :- 
- The PHP date() function formats a timestamp to a more readable date and time.
```
date(format,timestamp)
```
- format :-	Required. Specifies the format of the timestamp
- timestamp :-	Optional. Specifies a timestamp. Default is the current date and time

### Get a Date :-
- The required format parameter of the date() function specifies how to format the date (or time).
- Here are some characters that are commonly used for dates:
    - d - Represents the day of the month (01 to 31)
    - m - Represents a month (01 to 12)
    - Y - Represents a year (in four digits)
    - l (lowercase 'L') - Represents the day of the week

- Use the date() :- function to automatically update the copyright year on your website:
```
&copy; 2010-<?php echo date("Y");?>
```

### Get a Time :- 
- Here are some characters that are commonly used for times:
    - H - 24-hour format of an hour (00 to 23)
    - h - 12-hour format of an hour with leading zeros (01 to 12)
    - i - Minutes with leading zeros (00 to 59)
    - s - Seconds with leading zeros (00 to 59)
    - a - Lowercase Ante meridiem and Post meridiem (am or pm)

### NOTE :- Note that the PHP date() function will return the current date/time of the server!

### Get Your Time Zone :- 
    - date_default_timezone_set("America/New_York");

### Create a Date With mktime() :- 
- The PHP mktime() function returns the Unix timestamp for a date.
- SYNTAX :- 
```
    mktime(hour, minute, second, month, day, year)
```

### Create a Date From a String With strtotime() :- 
- The PHP strtotime() function is used to convert a human readable date string into a Unix timestamp.
- SYNTAX :-
```
    strtotime(time, now)
```

## PHP Include Files :-
- The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.

### PHP include and require Statements :-
- require :- will produce a fatal error (E_COMPILE_ERROR) and stop the script
- include :- will only produce a warning (E_WARNING) and the script will continue

- if you want the execution to go on and show users the output, even if the include file is missing, use the include statement.
SYNTAX :- 
```
include 'filename';
or
require 'filename';
```

## File Handling :-
- File handling is an important part of any web application. 
- You often need to open and process a file for different tasks.

- PHP has several functions for creating, reading, uploading, and editing files.

### PHP readfile() Function :-
- The readfile() function reads a file and writes it to the output buffer.
    - AJAX = Asynchronous JavaScript and XML
    - CSS = Cascading Style Sheets
    - HTML = Hyper Text Markup Language
    - PHP = PHP Hypertext Preprocessor
    - SQL = Structured Query Language
    - SVG = Scalable Vector Graphics
    - XML = EXtensible Markup Language
```
<?php
    echo readfile("webdictionary.txt");
?>
```
- The readfile() function is useful if all you want to do is open up a file and read its contents.

### PHP Open File - fopen() :-
- A better method to open files is with the fopen() function. 
- This function gives you more options than the readfile() function.
```
<?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("webdictionary.txt"));
    fclose($myfile);
?>
```

#### Tip: The fread() and the fclose() functions will be explained below.
Modes	Description
r	    Open a file for read only. File pointer starts at the beginning of the file
w       Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a       Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist.
x       Creates a new file for write only. Returns FALSE and an error if file already exists
r+      Open a file for read/write. File pointer starts at the beginning of the file
w+      Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+      Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+      Creates a new file for read/write. Returns FALSE and an error if file already exists

### PHP Read File - fread() :-
- The fread() function reads from an open file.
- The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.
- SYNTAX :- 
```
    fread($myfile,filesize("webdictionary.txt"));
```

### PHP Close File - fclose() :-
- The fclose() function is used to close an open file.
- It's a good programming practice to close all files after you have finished with them. You don't want an open file running around on your server taking up resources!
- The fclose() requires the name of the file we want to close
```
<?php
    $myfile = fopen("webdictionary.txt", "r");
    // some code to be executed....
    fclose($myfile);
?>
```

### PHP Read Single Line - fgets() :-
- The fgets() function is used to read a single line from a file.
```
<?php 
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
?>
```

### PHP Check End-Of-File - feof() :-
- The feof() function checks if the "end-of-file" (EOF) has been reached.
- The feof() function is useful for looping through data of unknown length.
```
<?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
?>
```

### PHP Read Single Character - fgetc() :-
- The fgetc() function is used to read a single character from a file.
```
<?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one character until end-of-file
    while(!feof($myfile)) {
        echo fgetc($myfile);
    }
    fclose($myfile);
?>
```

### PHP Create File - fopen() :-
- The fopen() function is also used to create a file.
- If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).
```
$myfile = fopen("testfile.txt", "w")
```

### PHP File Permissions :- 


### PHP Write to File - fwrite() :-
- The fwrite() function is used to write to a file.
- The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.
```
<?php
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>
```

### PHP Overwriting :-
- Now that "newfile.txt" contains some data we can show what happens when we open an existing file for writing. All the existing data will be ERASED and we start with an empty file.
``` 
<?php
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "Mickey Mouse\n";
    fwrite($myfile, $txt);
    $txt = "Minnie Mouse\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>
```

### PHP Append Text :-
- You can append data to a file by using the "a" mode. The "a" mode appends text to the end of the file, while the "w" mode overrides (and erases) the old content of the file.
```
<?php
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = "Donald Duck\n";
    fwrite($myfile, $txt);
    $txt = "Goofy Goof\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>
```

### PHP File Upload :-
- With PHP, it is easy to upload files to the server.

### Configure The "php.ini" File :-
- First, ensure that PHP is configured to allow file uploads.
- In your "php.ini" file, search for the file_uploads directive, and set it to On:
```
file_uploads = On
```
### Limit File Size :-
- The file input field in our HTML form above is named "fileToUpload".
- Now, we want to check the size of the file. If the file is larger than 500KB, an error message is displayed, and $uploadOk is set to 0:
```
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
```

### Limit File Type :-
- The code below only allows users to upload JPG, JPEG, PNG, and GIF files. All other file types gives an error message before setting $uploadOk to 0:
```
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
```

### What is a Cookie? :-
- A cookie is often used to identify a user. 
- A cookie is a small file that the server embeds on the user's computer. 
- Each time the same computer requests a page with a browser, it will send the cookie too.
- ith PHP, you can both create and retrieve cookie values.

- A cookie is created with the setcookie() function.
- SYNTAX :- 
```
    setcookie(name, value, expire, path, domain, secure, httponly);
```
- Only the name parameter is required. All other parameters are optional.

### PHP Create/Retrieve a Cookie :- 
- The following example creates a cookie named "user" with the value "John Doe". The cookie will expire after 30 days (86400 * 30). The "/" means that the cookie is available in entire website (otherwise, select the directory you prefer).
- We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset() function to find out if the cookie is set:
```
<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
    ?>

</body>
</html>
```
- Note: The setcookie() function must appear BEFORE the <html> tag.
- Note: The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded when received (to prevent URLencoding, use setrawcookie() instead).

### Modify a Cookie Value :-
- To modify a cookie, just set (again) the cookie using the setcookie() function:
```
<?php
    $cookie_name = "user";
    $cookie_value = "Alex Porter";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>

    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
    ?>

</body>
</html>
```

### Delete a Cookie :-
- To delete a cookie, use the setcookie() function with an expiration date in the past:
```
<?php
    // set the expiration date to one hour ago
    setcookie("user", "", time() - 3600);
?>
<html>
<body>

    <?php
        echo "Cookie 'user' is deleted.";
    ?>

</body>
</html>
```

### Check if Cookies are Enabled :-
- The following example creates a small script that checks whether cookies are enabled.
- First, try to create a test cookie with the setcookie() function, then count the $_COOKIE array variable:
```
<?php
    setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

    <?php
        if(count($_COOKIE) > 0) {
            echo "Cookies are enabled.";
        } else {
            echo "Cookies are disabled.";
        }
    ?>

</body>
</html>
```

## PHP Sessions :-
- A session is a way to store information (in variables) to be used across multiple pages.
- Unlike a cookie, the information is not stored on the users computer.

- When you work with an application, you open it, do some changes, and then you close it. This is much like a Session.
- The computer knows who you are.
- It knows when you start the application and when you end.
- But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.
- Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.
- So; Session variables hold information about one single user, and are available to all pages in one application.

- Tip: If you need a permanent storage, you may want to store the data in a database.

### Start a PHP Session :-
- A session is started with the session_start() function.
- Session variables are set with the PHP global variable: $_SESSION.
```
<?php
    // Start the session
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

    <?php
        // Set session variables
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "cat";
        echo "Session variables are set.";
    ?>

</body>
</html>
```
- Note: The session_start() function must be the very first thing in your document. Before any HTML tags.

### Get PHP Session Variable Values :-
```
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

    <?php
        // Echo session variables that were set on previous page
        echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    ?>
    <?php
        print_r($_SESSION);
    ?>


</body>
</html>
```

### Modify a PHP Session Variable :-
- To change a session variable, just overwrite it:
```
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

    <?php
        // to change a session variable, just overwrite it
        $_SESSION["favcolor"] = "yellow";
        print_r($_SESSION);
    ?>

</body>
</html>
```

### Destroy a PHP Session :-
- To remove all global session variables and destroy the session, use session_unset() and session_destroy():
```
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

    <?php
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
    ?>

</body>
</html>
```

### PHP Filters :-
- Validating data = Determine if the data is in proper form.
- Sanitizing data = Remove any illegal character from the data.

### The PHP Filter Extension :-
- PHP filters are used to validate and sanitize external input.
- The filter_list() function can be used to list what the PHP filter extension offers:
```
<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>
```

### Why Use Filters? :-
- Many web applications receive external input. External input/data can be:
    - User input from a form
    - Cookies
    - Web services data
    - Server variables
    - Database query results

### PHP filter_var() Function :-
- The filter_var() function both validate and sanitize data.
- The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:
    - The variable you want to check
    - The type of check to use

### Sanitize a String :-
- The following example uses the filter_var() function to remove all HTML tags from a string:
```
<?php
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;
?>
```

### Validate an Integer :-
```
<?php
    $int = 100;

    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("Integer is valid");
    } else {
        echo("Integer is not valid");
    }
?>
```

### Tip: filter_var() and Problem With 0 :-
- In the example above, if $int was set to 0, the function above will return "Integer is not valid". To solve this problem, use the code below:
```
<?php
    $int = 0;

    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("Integer is valid");
    } else {
        echo("Integer is not valid");
    }
?>
```

### Validate an IP Address :-
- The following example uses the filter_var() function to check if the variable $ip is a valid IP address:
```
<?php
    $ip = "127.0.0.1";

    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
        echo("$ip is a valid IP address");
    } else {
        echo("$ip is not a valid IP address");
    }
?>
```

### Sanitize and Validate an Email Address :-
- The following example uses the filter_var() function to first remove all illegal characters from the $email variable, then check if it is a valid email address:
```
<?php
    $email = "john.doe@example.com";

    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("$email is a valid email address");
    } else {
        echo("$email is not a valid email address");
    }
?>
```

### Sanitize and Validate a URL :-
- The following example uses the filter_var() function to first remove all illegal characters from a URL, then check if $url is a valid URL:
```
<?php
    $url = "https://www.w3schools.com";

    // Remove all illegal characters from a url
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // Validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo("$url is a valid URL");
    } else {
        echo("$url is not a valid URL");
    }
?>
```

### Validate an Integer Within a Range :-
- The following example uses the filter_var() function to check if a variable is both of type INT, and between 1 and 200:
```
<?php
    $int = 122;
    $min = 1;
    $max = 200;

    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
        echo("Variable value is not within the legal range");
    } else {
        echo("Variable value is within the legal range");
    }
?>
```

### Validate IPv6 Address :-
- The following example uses the filter_var() function to check if the variable $ip is a valid IPv6 address:
```
<?php
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
        echo("$ip is a valid IPv6 address");
    } else {
        echo("$ip is not a valid IPv6 address");
    }
?>
```

### Validate URL - Must Contain QueryString :-
- The following example uses the filter_var() function to check if the variable $url is a URL with a querystring:
```
<?php
    $url = "https://www.w3schools.com";

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo("$url is a valid URL with a query string");
    } else {
        echo("$url is not a valid URL with a query string");
    }
?>
```

### Remove Characters With ASCII Value > 127 :-
- The following example uses the filter_var() function to sanitize a string. It will both remove all HTML tags, and all characters with ASCII value > 127, from the string:
```
<?php
    $str = "<h1>Hello WorldÆØÅ!</h1>";

    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;
?>
```

### Callback Functions :-
- A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.
- Any existing function can be used as a callback function.
- To use a function as a callback function, pass a string containing the name of the function as the argument of another function:
- Use an anonymous function as a callback for PHP's array_map() function:

```
<?php
    function my_callback($item) {
        return strlen($item);
    }

    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map("my_callback", $strings);
    print_r($lengths);
?>
```

### Callbacks in User Defined Functions :-
- User-defined functions and methods can also take callback functions as arguments
- To use callback functions inside a user-defined function or method, call it by adding parentheses to the variable and pass arguments as with normal functions:
```
<?php
    function exclaim($str) {
        return $str . "! ";
    }

    function ask($str) {
        return $str . "? ";
    }

    function printFormatted($str, $format) {
        // Calling the $format callback function
        echo $format($str);
    }

    // Pass "exclaim" and "ask" as callback functions to printFormatted()
    printFormatted("Hello world", "exclaim");
    printFormatted("Hello world", "ask");
?>
```


### What is JSON? 
- JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
- Since the JSON format is a text-based format, it can easily be sent to and from a server, and used as a data format by any programming language.

- PHP has some built-in functions to handle JSON.
- First, we will look at the following two functions:
    - json_encode()
    - json_decode()

### PHP - json_encode() :-
- The json_encode() function is used to encode a value to JSON format.
```
<?php
    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

    echo json_encode($age);
?>
```

### PHP - json_decode() :-
- The json_decode() function is used to decode a JSON object into a PHP object or an associative array.
```
<?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj));
?>
```
- The json_decode() function returns an object by default.
- The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays.
```
<?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj, true));
?>
```

### PHP - Accessing the Decoded Values :-
```
<?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    echo $obj->Peter;
    echo $obj->Ben;
    echo $obj->Joe;
?>
```

### PHP - Looping Through the Values :-
- You can also loop through the values with a foreach() loop:
```
<?php
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    foreach($obj as $key => $value) {
        echo $key . " => " . $value . "<br>";
    }
?>
```

# What is an Exception? :- 
- An exception is an object that describes an error or unexpected behaviour of a PHP script.
- Exceptions are thrown by many PHP functions and classes.
- User defined functions and classes can also throw exceptions.
- Exceptions are a good way to stop a function when it comes across data that it cannot use.

### Throwing an Exception :-
- The throw statement allows a user defined function or method to throw an exception. 
- When an exception is thrown, the code following it will not be executed.
- If an exception is not caught, a fatal error will occur with an "Uncaught Exception" message.
```
<?php
    function divide($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    echo divide(5, 0);
?>
```

### The try...catch Statement :-
- To avoid the error from the example above, we can use the try...catch statement to catch exceptions and continue the process.
- SYNTAX :- 
```
try {
    code that can throw exceptions
} catch(Exception $e) {
    code that runs when an exception is caught
}
```

- EXAMPLE :- 
```
<?php
    function divide($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divide(5, 0);
    } catch(Exception $e) {
        echo "Unable to divide.";
    }
?>
```

### The try...catch...finally Statement :-
- The try...catch...finally statement can be used to catch exceptions.
- Code in the finally block will always run regardless of whether an exception was caught.
- If finally is present, the catch block is optional.
- SYNTAX :- 
```
try {
  code that can throw exceptions
} catch(Exception $e) {
  code that runs when an exception is caught
} finally {
  code that always runs regardless of whether an exception was caught
}
```
- EXAMPLE :- 
```
<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide. ";
} finally {
  echo "Process complete.";
}
?>
```

### The Exception Object :-
- The Exception Object contains information about the error or unexpected behaviour that the function encountered.
- SYNTAX :- 
```
new Exception(message, code, previous)
```
- Parameter Values :- 
message  -> Optional. A string describing why the exception was thrown
code	 -> Optional. An integer that can be used to easily distinguish this exception from others of the same type
previous ->	Optional. If this exception was thrown in a catch block of another exception, it is recommended to pass that exception into this parameter

- Methods :- 
    - When catching an exception, the following table shows some of the methods that can be used to get information about the exception:
        - getMessage()	Returns a string describing why the exception was thrown
        - getPrevious()	If this exception was triggered by another one, this method returns the previous exception. If not, then it returns null
        - getCode()	Returns the exception code
        - getFile()	Returns the full path of the file in which the exception was thrown
        - getLine()	Returns the line number of the line of code which threw the exception
```
<?php
    function divide($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero", 1);
        }
        return $dividend / $divisor;
    }

    try {
        echo divide(5, 0);
    } catch(Exception $ex) {
        $code = $ex->getCode();
        $message = $ex->getMessage();
        $file = $ex->getFile();
        $line = $ex->getLine();
        echo "Exception thrown in $file on line $line: [Code $code]
        $message";
    }
?>
```


# 03 PHP OOP :-
-----------------
- OOP stands for Object-Oriented Programming.
- Procedural programming is about writing procedures or functions that perform operations on the data, 
- While object-oriented programming is about creating objects that contain both data and functions.
- ADVANTAGES :- 
    - OOP is faster and easier to execute
    - OOP provides a clear structure for the programs
    - OOP makes it possible to create full reusable applications with less code and shorter development time

### PHP - What are Classes and Objects?
- a class is a template for objects, and an object is an instance of a class.
- When the individual objects are created. 
- they inherit all the properties and behaviors from the class. 
- but each object will have different values for the properties.

    A class is defined by using the class keyword, followed by the name of
the class and a pair of curly braces ({}).
```
<?php
    class Fruit {
        // code goes here...
    }
?>
```

Classes are nothing without objects! We can create multiple objects from
a class.
- Each object has all the properties and methods defined in the class, but they will have different property values.
- Objects of a class are created using the new keyword.

### PHP - The $this Keyword :-
- The $this keyword refers to the current object, and is only available inside methods.

### PHP - instanceof :- 
- You can use the instanceof keyword to check if an object belongs to a specific class:

## PHP - The __construct Function :-
- A constructor allows you to initialize an object's properties upon creation of the object.
- If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
- Notice that the construct function starts with two underscores (__)!

## PHP - The __destruct Function :- 
- A destructor is called when the object is destruct or script is stopped or exited.
- If you create a __destruct() function, PHP will automatically call this function at the end of the script.
- Notice that the destruct function starts with two underscores (__)!

## PHP - Access Modifiers :-
- access modifiers which control where they can be accessed.
- There are three access modifiers:
    - public - the property or method can be accessed from everywhere. This is default
    - protected - the property or method can be accessed within the class and by classes derived from that class
    - private - the property or method can ONLY be accessed within the class

## PHP - What is Inheritance?
- When a class derives from another class.
- The child class will inherit all the public and protected properties and methods from the parent class.
- child class have its own properties and methods.
- An inherited class is defined by using the extends keyword.

## PHP - Inheritance and the Protected Access Modifier :-


## PHP - Overriding Inherited Methods :- 
- Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
- It will refere child class's method

## PHP - The final Keyword :- 
- The final keyword can be used to prevent class inheritance or to prevent method overriding.

## PHP - Class Constants :- 
- Class constants can be useful if you need to define some constant data within a class.
- A class constant is declared inside a class with the const keyword.
- A constant cannot be changed once it is declared.
- Class constants are case-sensitive.
- However, it is recommended to name the constants in all uppercase letters.
- We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name
```
<?php
    class Goodbye {
        const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    }

    echo Goodbye::LEAVING_MESSAGE;
?>
```

## PHP - What are Abstract Classes and Methods? 
- Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
- An abstract class is a class that contains at least one abstract method.
- An abstract method is a method that is declared, but not implemented in the code.
- An abstract class or method is defined with the abstract keyword:
```
    <?php
        abstract class ParentClass {
            abstract public function someMethod1();
            abstract public function someMethod2($name, $color);
            abstract public function someMethod3() : string;
        }
    ?>
```
- When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier.
- if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private.


- The child class method must be defined with the same name and it redeclares the parent abstract method
- The child class method must be defined with the same or a less restricted access modifier
- The number of required arguments must be the same.
- However, the child class may have optional arguments in addition

## PHP - What are Interfaces?
- Interfaces allow you to specify what methods a class should implement.
- Interfaces make it easy to use a variety of different classes in the same way.
- When one or more classes use the same interface, it is referred to as "polymorphism".
- Interfaces are declared with the interface keyword:
```
    <?php
        interface InterfaceName {
            public function someMethod1();
            public function someMethod2($name, $color);
            public function someMethod3() : string;
        }
    ?>
```

## PHP - Interfaces vs. Abstract Classes :- 
- Interface are similar to abstract classes.
- Interfaces cannot have properties, while abstract classes can
- All interface methods must be public, while abstract class methods is public or protected
- All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
- Classes can implement an interface while inheriting from another class at the same time

## PHP - What are Traits?
- PHP only supports single inheritance: a child class can inherit only from one single parent.
- Traits are used to declare methods that can be used in multiple classes.


## PHP - Static Methods
- Static methods can be called directly - without creating an instance of the class first.
- Static methods are declared with the static keyword:
```
    <?php
        class ClassName {
            public static function staticMethod() {
                echo "Hello World!";
            }
        }
    ?>
```
- To access a static method use the class name, double colon (::), and the method name:
```
    ClassName::staticMethod();
```

## PHP - Static Properties :- 
- Static properties can be called directly - without creating an instance of a class.
- Static properties are declared with the static keyword:

## PHP Namespaces :- 
- Namespaces are qualifiers that solve two different problems:
    - They allow for better organization by grouping classes that work together to perform a task
    - They allow the same name to be used for more than one class

- Note: A namespace declaration must be the first thing in the PHP file. The following code would be invalid:
```
    this is invalid
    <?php
        echo "Hello World!";
        namespace Html;
    ?>
```

## PHP - What is an Iterable? 
- An iterable is any value which can be looped through with a foreach() loop.
- The iterable pseudo-type was introduced in PHP 7.1
- it can be used as a data type for function arguments and function return values.
- The iterable keyword can be used as a data type of a function argument or as the return type of a function:

## PHP - Creating Iterables :-
- ARRAYS :- All arrays are iterables, so any array can be used as an argument of a function that requires an iterable.

- ITERATORS :- Any object that implements the Iterator interface can be used as an argument of a function that requires an iterable.
    - An iterator contains a list of items and provides methods to loop through them.
    - It keeps a pointer to one of the elements in the list.
    - Each item in the list should have a key which can be used to find the item.
    - An iterator must have these methods:
        - current() - Returns the element that the pointer is currently pointing to. It can be any data type
        - key() Returns the key associated with the current element in the list. It can only be an integer, float, boolean or string
        - next() Moves the pointer to the next element in the list
        - rewind() Moves the pointer to the first element in the list
        - valid() If the internal pointer is not pointing to any element (for example, if next() was called at the end of the list), this should return false. It returns true in any other case


# 06 AJAX :-
--------------
- AJAX stands for Asynchronous JavaScript and XML.
- AJAX is a technique for creating fast and dynamic web pages.
- It is possible to update parts of a web page, without reloading the whole page.


### AJAX is Based on Internet Standards :-
- AJAX is based on internet standards, and uses a combination of:
    - XMLHttpRequest object (to exchange data asynchronously with a server)
    - JavaScript/DOM (to display/interact with the information)
    - CSS (to style the data)
    - XML (often used as the format for transferring data)

### NOTE :- 
    AJAX was made popular in 2005 by Google, with Google Suggest.

- AJAX is used to create more interactive applications.

### AJAX with DATABASE :-
- AJAX can be used for interactive communication with a database.

### AJAX with XML :- 
- AJAX can be used for interactive communication with an XML file.

### AJAX Live Search :-
- Live search has many benefits compared to traditional searching:
    - Results are shown as you type
    - Results narrow as you continue typing
    - If results become too narrow, remove characters to see a broader result