<?php
session_start();  //Starting session
include('../../db/connectdb.php'); // Includes database connection



$message = "";
if(isset($_POST) && isset($_POST['recipe_id']) && !trim($_POST['recipe_id'])) {
        $recipe         = mysqli_real_escape_string($dbconnect,$_POST['recipe']);

        $result     = mysqli_query($dbconnect,"SELECT recipe FROM recipe where recipe='$recipe'" );
        $numResults = ($result) ? mysqli_num_rows($result) : 0;  //if statement to check $result contains something (ternary statement)
        
        // Validate recipe exists
        if ($numResults) {
            $message =  "Recipe already exists!!";
        } else {
            mysqli_query($dbconnect,"INSERT INTO recipe (name) VALUES ('$recipe')");
            $recipe_id = mysqli_insert_id($dbconnect);
            if ($recipe_id) {
                $ingredientCount = count($_POST['ingredients']);
                if ($ingredientCount) {
                    foreach ($_POST['ingredients'] as $key => $value) {
                        $ingredient = $value['ingredient'];
                        $quantity = $value['quantity'];
                        $measurement = $value['measurement'];
                        mysqli_query($dbconnect,"INSERT INTO ingredient (recipe_id,name,quantity,measurement) VALUES ($recipe_id,'$ingredient','$quantity','$measurement')");                           
                    }
                }
            
            }
            $message = "Recipe Successfully Added!!";
        }
    }
?>
