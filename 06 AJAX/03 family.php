<?php 
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost','root','', "first");
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    
    // mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM myguests WHERE id = '".$q."'";
    $result = mysqli_query($con,$sql);
    
    echo "<table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['firstname'] . "</td>";
      echo "<td>" . $row['lastname'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    
    mysqli_close($con);
?>