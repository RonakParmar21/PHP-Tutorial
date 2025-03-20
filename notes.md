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



