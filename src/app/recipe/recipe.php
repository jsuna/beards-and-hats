<?php
include('../header/header.php');
include('add-recipe-code.php');
include('edit-recipe-code.php');

//Initialize vars!
$recipe_name = '';
$ingredients = [];

if (!empty($recipe_id) && isset($recipe)) {
    $recipe_name = $recipe['name'];
    $ingredients = $recipe['ingredients'];
}

//ingredient row template
$tr_tmpl = '<tr><td><input type="checkbox" name="chkbox[]" checked="checked" /></td>'.
    '<td><label>Ingredient</label>'.
    '<input type="text" name="ingredients[%1$d][ingredient]" value="%2$s" />'.
    '</td>'.
    '<td><label for="quantity">Quantity</label>'.
    '<input type="text" class="small"  name="ingredients[%1$d][quantity]" value="%3$s" />'.
    '</td>'.
    '<td><label for="measurement">Measurement</label>'.
    //selects don't have a 'value' attribute instead you have to use the 'selected' attribute on the selected option ;)
    //we'll loop through and select the correct option then pass the finished product into template
    '<select name="ingredients[%1$d][measurement]">%4$s</select>'.
    '</td>'.
    '</tr>';
/*
<option>....</option>
<option>cup</option>
<option>ounce</option>
<option>tablespoon</option>
<option>teaspoon</option>
<option>pound</option>
*/
//the benefit of this approach to select options in addition to making it easy to select the correct option, 
//is, you can add more options easily!
$select_opts = array(
  '0'=>'....',
  'cup'=>'Cup',
  'ounce'=>'Ounce',
  'tablespoon'=>'Tablespoon',
  'teaspoon'=>'Teaspoon',
  'pound'=>'Pound'
);
?>

<html>
    <header>
        
    </header>
  
    <body>
        <input type="button" value="Back" onClick="window.location.href = '../home/home.php'"></input>
        <form action="" method="post">
            <div id="add-recipe">
                <p><input id="recipe" name="recipe" type="text" placeholder="Recipe Name" 
                value="<?php echo $recipe_name; ?>"></input></p>
            </div>
                
            <p> 
                <input type="button" value="Add Ingredient" onClick="addRow('dataTable')" /> 
                <input type="button" value="Remove Ingredient" onClick="deleteRow('dataTable')" /> 
                <p>(All acions apply only to entries with check marked check boxes only).</p>
            </p>
            
            <table id="dataTable" class="form" border="1">
                <tbody>
                    <?php
                        if (!empty($recipe_id) && count($ingredients)) {
                            //In "EDIT" mode...
                            //loop and create the table rows
                            foreach($ingredients as $index=>$ing_row) {
                                $ing_name = $ing_row[0];
                                $ing_quanity = $ing_row[1];
                                $ing_unit = $ing_row[2];
                                //create select opts...you could move this out to it's own function (and you should)
                                $opts = [];
                                foreach($select_opts as $val=>$text) {
                                    $selected = ($val == $ing_unit) ? ' selected' : '';
	                                $opts[] = sprintf('<option value="%s"%s>%s</option>', $val, $selected, $text);
                                }
                                $opts = implode("\n", $opts); //convert $opts array into a string
                                //end select opts
                                //output table row with values
                                //see: http://php.net/manual/en/function.sprintf.php for how this is working ;)
                                echo sprintf($tr_tmpl, $index, $ing_name, $ing_quantity, $opts);
                            }
                        } else {
                            //In "ADD" mode ...
                            //create select opts...you could move this out to it's own function (and you should)
                            $opts = [];
                            foreach($select_opts as $val=>$text) {
                                //there is no $selected pass an empty string
                                $opts[] = sprintf('<option value="%s"%s>%s</option>', $val, '', $text);
                            }
                            $opts = implode("\n", $opts); //convert $opts array into a string
                            //output empty table row with empty values set 0 as the index
                            echo sprintf($tr_tmpl, 0, '', '', $opts);
                        }
                    ?>
                </tbody>
            </table>
            <input type="hidden" value="" name="recipe_id" />
            <input type="submit" value="save" name="action" />
        </form>
        <script src="recipe.js"></script>
  </body>
  
</html>
