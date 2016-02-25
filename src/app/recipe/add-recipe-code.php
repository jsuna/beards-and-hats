<?php
session_start();  //Starting session
include('../../db/connectdb.php'); // Includes database connection
if(isset($_POST['action']))
{
    $recipe         = mysqli_real_escape_string($dbconnect,$_POST['recipe']);
    $ingredient     = mysqli_real_escape_string($dbconnect,$_POST['ingredient']);
    $quantity       = mysqli_real_escape_string($dbconnect,$_POST['quantity']);
    $measurement    = mysqli_real_escape_string($dbconnect,$_POST['measurement']);
    //$query      = "SELECT email FROM user where email='$email'";
    //echo($query);
    $result     = mysqli_query($dbconnect,"SELECT recipe FROM recipe where recipe='$recipe'" );
    $numResults = mysqli_num_rows($result);
    if ($numResults>=1) // Validate recipe exists
    {
        $message =  "Recipe already exists!!";
    }
    else
    {
        mysqli_query($dbconnect,"INSERT into recipe(recipe) values('$recipe')");
        mysqli_query($dbconnect,"INSERT into ingredient(ingredient,quantity,measurement) values('$ingredient','$quantity','$measurement')");
        $message = "Recipe Successfully Added!!";
    }
}

?>
