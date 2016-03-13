<?php
  //TODO work on fucking query results
  $q = "SELECT r.*, i.* FROM recipe r INNER JOIN ingredient i ON r.id=i.recipe_id";
  $results = mysqli_query($dbconnect,$q);
  
  echo "<table>";
    while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
      echo '<tr>';
      echo '<td>'. $row['recipe_name'] . '</td>';
      echo '<td>'. $row['ingredient'] . '</td>';
      echo '<td>'. $row['quantity'] . '</td>';
      echo '<td>'. $row['measurement'] . '</td>';
      echo '</tr>';
    }
- See more at: http://www.startutorial.com/articles/view/php-crud-tutorial-part-1/#sthash.AyA9dOC7.dpuf
  
  echo "</table>"; //Close the table in HTML
 
?>
