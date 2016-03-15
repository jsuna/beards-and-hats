<?php
    include('../header/header.php');
    include('add-recipe-code.php');
    include('edit-recipe-code.php');
    
    echo '<pre>';print_r($recipe_id); echo '</pre>';
    echo '<pre>';print_r($recipe, $row = 'name'); echo '</pre>';
    echo '<input id="recipe" name="recipe" type="text">';
    if (count($recipe)) {
    // foreach takes an array then you can use 'as' to alias the index and the value per iteration
        foreach ($results as $id => $recipeName) {       
            echo $recipeName['recipeName'];
            echo '</input>';
        }
        echo '<pre>';print_r($recipeName, 'name'); echo '</pre>';
    }
    echo '<pre>';print_r($recipe); echo '</pre>';
    echo '<pre>';print_r($recipe, 'name'); echo '</pre>';

?>

<html>
    <header>
        
    </header>
  
    <body>
        <input type="button" value="Back" onClick="window.location.href = '../home/home.php'"></input>
        <form action="" method="post">
            <div id="add-recipe">
                <p><input id="recipe" name="recipe" type="text" placeholder="Recipe Name"></p>


                
            </div>
                
            <p> 
                <input type="button" value="Add Ingredient" onClick="addRow('dataTable')" /> 
                <input type="button" value="Remove Ingredient" onClick="deleteRow('dataTable')" /> 
                <p>(All acions apply only to entries with check marked check boxes only).</p>
            </p>
            
            <table id="dataTable" class="form" border="1">
                <tbody>
                    <tr>
                        <td ><input type="checkbox" name="chkbox[]" checked="checked" /></td>
                        <td>
                            <label>Ingredient</label>
                            <input type="text" name="ingredients[0][ingredient]">
                        </td>
                        <td>
                            <label for="quantity">Quantity</label>
                            <input type="text" class="small"  name="ingredients[0][quantity]">
                        </td>
                        <td>
                            <label for="measurement">Measurement</label>
                            <select name="ingredients[0][measurement]">
                                <option>....</option>
                                <option>cup</option>
                                <option>ounce</option>
                                <option>tablespoon</option>
                                <option>teaspoon</option>
                                <option>pound</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <input type="hidden" value="" name="recipe_id" />
            <input type="submit" value="save" name="action" />
        </form>
        <script src="recipe.js"></script>
  </body>
  
</html>