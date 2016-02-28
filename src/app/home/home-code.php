<?php
  //TODO work on fucking query results
 $q = "SELECT r.*, i.* FROM recipe r INNER JOIN ingredient i ON r.id=i.recipe_id";
 $results = mysqli_query($dbconnect,$q);
 
?>
