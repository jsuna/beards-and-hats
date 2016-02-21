<?php
    include('../header/header.php');

?>

<html>
    <header>
    </header>
  
    <body>
        <input type="button" value="Back" onClick="window.location.href = '../home/home.php'"></input>
        <div id="add-recipe">
            <form action="" method="post">
                <p><input id="recipe-name" name="recipe-name" type="text" placeholder="Recipe Name"></p>
            </form>
        </div>
            
        <p> 
        <input type="button" value="Add Ingredient" onClick="addRow('dataTable')" /> 
        <input type="button" value="Remove Ingredient" onClick="deleteRow('dataTable')" /> 
        <p>(All acions apply only to entries with check marked check boxes only.)</p>
        </p>
        
        <table id="dataTable" class="form" border="1">
            <tbody>
                <tr>
                    <p>
                        <td >
                            <input type="checkbox" name="chk[]" checked="checked" />
                        </td>
                        <td>
                            <label>Ingredient</label>
                            <input type="text" name="ingredient-name">
                        </td>
                        <td>
                            <label for="quantity">Quantity</label>
                            <input type="text" class="small"  name="quantity">
                        </td>
                        <td>
                            <label for="measurement">Measurement</label>
                            <select id="measurement" name="measurement">
                                <option>....</option>
                                <option>cup</option>
                                <option>ounce</option>
                                <option>tablespoon</option>
                                <option>teaspoon</option>
                                <option>pound</option>
                            </select>
                        </td>
	                </p>
                </tr>
            </tbody>
        </table>
        <script src="recipe.js"></script>
  </body>
</html>
