<html>
<head>
<script>
    function showHint(str) {
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "02 getHint.php?q=" + str, true);
            xmlhttp.send();
        }
    }
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>

<!-- 
    CODE EXPLAINATION :-
    ----------------------
    - First, check if the input field is empty (str.length == 0). If it is, clear the content of the txtHint placeholder and exit the function.

    - if the input field is not empty,
        - Create an XMLHttpRequest object
        - Create the function to be executed when the server response is ready
        - Send the request off to a PHP file (02 getHint.php) on the server.
        - Notice that q parameter is added to the url (02 getHint.php?q=" + str).
        - And the str variable holds the content of the input field.
-->