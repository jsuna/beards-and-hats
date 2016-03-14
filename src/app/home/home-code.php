<?php

  $q = "SELECT r.id as recipeId,r.name as recipeName, i.* FROM recipe r INNER JOIN ingredient i ON r.id=i.recipe_id";
  $results = mysqli_query($dbconnect,$q);
  
  
    $recipes = array();
    while ($row = mysqli_fetch_array($results)){
        $ingredient = sprintf('<div class="quantity">%s %s</div> <div class="name">%s</div>',$row['quantity'],$row['measurement'],$row['name']);
        // $ingredientArray = array(
        //     'id' => $row['recipeId'],
        //     'ingredient' => $ingredient,
        // );
        // $recipes[$row['recipeId']] = array(
        //     'name'=>$row['recipeName'],
        //     'ingredients'=>array(),
        // ); 
    // if the array doesn't exist 
    //     if (!isset($recipes[$row['recipeName']])) {                         
    // // create it and populate the first value
    //         $recipes[$row['recipeName']] = array($ingredient);              
    //     } else {
    // // add to it            
    //         array_push($recipes[$row['recipeName']], $ingredient);          
    //     }
        if (!isset($recipes[$row['recipeId']])) {
            $recipes[$row['recipeId']] = array();
            $recipes[$row['recipeId']]['ingredients'] = array($ingredient);
            $recipes[$row['recipeId']]['name'] = $row['recipeName'];
        } else {
            $recipes[$row['recipeId']]['ingredients'][] = $ingredient;
        }
    }
    
 
?>