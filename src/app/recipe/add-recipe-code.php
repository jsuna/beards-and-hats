<?php
session_start();  //Starting session
include('../../db/connectdb.php'); // Includes database connection

if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
        
        // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
        if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
        {
        // query db
        $id = $_GET['id'];
        $result = mysql_query("SELECT * FROM recipe INNER JOIN On recipe.recipe_id=ingredient.recipe_id")
        or die(mysql_error()); 
        $row = mysql_fetch_array($result);
 
        // check that the 'id' matches up with a row in the databse
        if($row)
        {
 
        // get data from db
        $ingredient     = $row['ingredient'];
        $quantity       = $row['quantity'];
        $measurement    = $row['measurement'];
 
        // show form
        renderForm($ingredient, $quantity, $measurement, '');
        }
        else
        // if no match, display result
        {
        echo "No results!";
        }
        }
        // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
        else {
            echo 'Error!';
        }
    }   

else (
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
)
?>
