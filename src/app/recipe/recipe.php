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
echo '<pre>';print_r($results); echo '</pre>';
echo '<pre>';print_r($recipe); echo '</pre>';
echo '<pre>';print_r($recipe, 'recipeName'); echo '</pre>';
$addRow = '<script type="text/javascript">, addRow(tableID); </script>';
echo '<pre>';print_r($addRow); echo '</pre>';
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
                
                    $test = $recipeName['recipeName'];
                    if (!empty($recipe_id)) {
                        echo $test;
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
                                    foreach($recipe[$test] as $result) {
                                        echo $result['0'];
                                        echo '<script type="text/javascript">, addRow(tableID); </script>';;                     
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
                                    foreach($recipe[$test] as $result) {
                                        echo $result['1'];
                                        echo $addRow;  
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
                                    foreach($recipe[$test] as $result) {
                                        echo $result['3'];
                                        echo $addRow;  
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
