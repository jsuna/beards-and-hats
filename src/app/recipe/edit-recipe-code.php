<?php
if (!session_id()) session_start();  //Starting session
include('../../db/connectdb.php'); // Includes database connection


$recipe = array('name'=>'', 'ingredients'=>array());
if (isset($_GET['action'])) {
    $recipe_id = $_GET['id'];
    
    $count = "SELECT name, count(*) FROM ingredient i INNER JOIN recipe r ON r.id=i.recipe_id WHERE r.id=$recipe_id";
    $result_count = mysqli_query($dbconnect,$count);
    
    $q = "SELECT r.name as recipeName, i.* FROM recipe r INNER JOIN ingredient i ON r.id=i.recipe_id WHERE r.id=$recipe_id";
    $results = mysqli_query($dbconnect,$q);
    
    if (isset($results)) {
        while ($row = mysqli_fetch_array($results)) {
            $ingredient = array($row['name'],$row['quantity'],$row['measurement']); 
            
            if (!$recipe['name']) $recipe['name'] = $row['recipeName'];
            
            $recipe['ingedients'][] = $ingregdient;
        }
    }
}

$message = "";
if(isset($_POST) && isset($_POST['recipe_id']) && trim($_POST['recipe_id'])) {
    
}

?>
