<?php
if (!session_id()) session_start();  //Starting session
include('../../db/connectdb.php'); // Includes database connection

$recipe = array();
if (isset($_GET['action'])) {
    $recipe_id = $_GET['id'];
    $q = "SELECT r.name as recipeName, i.* FROM recipe r INNER JOIN ingredient i ON r.id=i.recipe_id WHERE r.id=$recipe_id";
    $results = mysqli_query($dbconnect,$q);
    
    if (is_resource($results)) {
        while ($row = mysqli_fetch_array($results)) {
            $ingredient = array($row['name'],$row['quantity'],$row['measurement']); 
            
            
            if (!isset($recipe[$row['recipeName']])) {
                $recipe[$row['recipeName']] = array($ingredient);
            } else {
                $recipe[$row['recipeName']][] = $ingredient;
            }
        }
    }
}

$message = "";
if(isset($_POST) && isset($_POST['recipe_id']) && trim($_POST['recipe_id'])) {
    
}

?>
