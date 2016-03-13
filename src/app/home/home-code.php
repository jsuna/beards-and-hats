<?php
  //TODO work on fucking query results
  $q = "SELECT r.*, i.* FROM recipe r INNER JOIN ingredient i ON r.id=i.recipe_id";
  $results = mysqli_query($dbconnect,$q);
  
  $p = "SELECT * FROM recipe";
  $res = mysqli_query($dbconnect,$p);
  
 // echo "<table>";
 //   while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  //      echo '<tr>';
  //      echo '<td>'. $row['recipe_name'] . '</td>';
  //      echo '<td>'. $row['ingredient'] . '</td>';
  //      echo '<td>'. $row['quantity'] . '</td>';
  //      echo '<td>'. $row['measurement'] . '</td>';
  //      echo '</tr>';
  //  }

  // echo "</table>"; //Close the table in HTML
 
?>
