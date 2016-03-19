<?php
    include('../header/header.php');
    include('add-recipe-code.php');
    include('edit-recipe-code.php');

    if (!empty($recipe_id)) {
        if (count($recipe)) {
        // foreach takes an array then you can use 'as' to alias the index and the value per iteration
            foreach ($results as $id => $recipeName) {       
            }
        }
    } else {
        
    }
echo '<pre>';print_r($recipe, $row = 'name'); echo '</pre>'

?>

<html>
    <header>
        
    </header>
  
    <body>
        <input type="button" value="Back" onClick="window.location.href = '../home/home.php'"></input>
        <form action="" method="post">
            <div id="add-recipe">
                
                <p><input id="recipe" name="recipe" type="text" placeholder="Recipe Name" 
                value="<?php 
                    if (!empty($recipe_id)) {
                        echo $recipeName['recipeName'];
                    } else {
                    }
                ?>"></input></p>


                
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
                            <input type="text" name="ingredients[0][ingredient]"
                            value="<?php 
                                if (!empty($recipe_id)) {
                                    foreach($ingredient as $result) {
                                        echo $result['name'];
                                    }
                                } else {
                                }
                            ?>">
                        </td>
                        <td>
                            <label for="quantity">Quantity</label>
                            <input type="text" class="small"  name="ingredients[0][quantity]"
                            value="<?php 
                                if (!empty($recipe_id)) {
                                    foreach($ingredient as $result) {
                                        echo $result['quantity'];
                                    }
                                } else {
                                }
                            ?>">
                        </td>
                        <td>
                            <label for="measurement">Measurement</label>
                            <select name="ingredients[0][measurement]"
                            value="<?php 
                                if (!empty($recipe_id)) {
                                    foreach($ingredient as $result) {
                                        echo $result['measurement'];
                                    }
                                } else {
                                }
                            ?>">
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
