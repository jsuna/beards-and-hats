<?php
session_start();  //Starting session
include('../../db/connectdb.php'); // Includes database connection
if(isset($_POST['action']))
{          
    if($_POST['action']=="add_new")
    {
        $recipe         = mysqli_real_escape_string($dbconnect,$_POST['recipe']);
        $ingredient     = mysqli_real_escape_string($dbconnect,$_POST['ingredient']);
        $quantity       = mysqli_real_escape_string($dbconnect,$_POST['quantity']);
        $measurement    = mysqli_real_escape_string($dbconnect,$_POST['measurement']);
        $strSQL         = mysqli_query($dbconnect,"select name from user where username='$username' and password='md5($password)'");
        $Results        = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        {
            header('Location: ../home/home.php');
        }
        else
        {
            $message = "Invalid email or password!!";
        }        
    }
    elseif($_POST['action']=="edit")
    {
        $recipe         = mysqli_real_escape_string($dbconnect,$_POST['recipe']);
        $ingredient     = mysqli_real_escape_string($dbconnect,$_POST['ingredient']);
        $quantity       = mysqli_real_escape_string($dbconnect,$_POST['quantity']);
        $measurement    = mysqli_real_escape_string($dbconnect,$_POST['measurement']);
        //$query      = "SELECT email FROM user where email='$email'";
        //echo($query);
        $result     = mysqli_query($dbconnect,"SELECT recipe FROM recipe where recipe='$recipe'" );
        $numResults = mysqli_num_rows($result);
        if ($numResults>=1) // Validate email address
        {
            $message =  "Recipe already exists!!";
        }
        else
        {
            mysqli_query($dbconnect,"INSERT into recipe(recipe) values('$recipe')");
            mysqli_query($dbconnect,"INSERT into ingredient(ingredient,quantity,measurement) values('$ingredient','$quantity','$measurement')");
            $message = "Signup Sucessfully!!";
        }
    }
}
?>
