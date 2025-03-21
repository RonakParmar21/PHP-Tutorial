<html>
<head>
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","05 livesearch1.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>

</body>
</html>

<!-- 
    SOURCE CODE EXPLAINATION :- 
    ----------------------------
    - If the input field is empty (str.length==0), the function clears the content of the livesearch placeholder and exits the function.

    - If the input field is not empty, the showResult() function executes the following:
        - Create an XMLHttpRequest object
        - Create the function to be executed when the server response is ready
        - Send the request off to a file on the server
        - Notice that a parameter (q) is added to the URL (with the content of the input field)

    - If there is any text sent from the JavaScript (strlen($q) > 0), the following happens:
        - Load an XML file into a new XML DOM object
        - Loop through all <title> elements to find matches from the text sent from the JavaScript
        - Sets the correct url and title in the "$response" variable. If more than one match is found, all matches are added to the variable
        - If no matches are found, the $response variable is set to "no suggestion"
-->