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