<html>
<head>
<script>
function getVote(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","06 ajax_poll.php?vote="+int,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<div id="poll">
<h3>Do you like PHP and AJAX so far?</h3>
<form>
Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>

</body>
</html>

<!-- 
    CODE EXPLAINATION :- 
    -----------------------
    - The getVote() function does the following:
        - Create an XMLHttpRequest object
        - Create the function to be executed when the server response is ready
        - Send the request off to a file on the server
        - Notice that a parameter (vote) is added to the URL (with the value of the yes or no option)
-->