<?php
    include('../../db/connectdb.php'); // Includes database connection
    include('../header/header.php');
    include('home-code.php'); // table of ingredients with recipes

//using a PHP file to be served through apache server
?>
<html>
<head>
	<title>Recipe App</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<h1>Recipe Application</h1>
	<p>This is a quickly though of application to display recipes and ingredients for my weekly meal planning</p>
	
	<input type="button" value="Create New Recipe" onClick="window.location.href = '../recipe/recipe.php'"></input>
	
<?php
    echo '<table>';
    echo '<tr><th>Recipe</th><th>Ingredients</th><th>Action</th></tr>';
    if (count($recipes)) {
    // foreach takes an array then you can use 'as' to alias the index and the value per iteration
        foreach($recipes as $id => $recipe) {       
            echo '<td>'.$recipe['name'].'</td>';
            echo '<td>';
        
    /* all ingredients will be in this array even just one… if there are no ingredients 
    then count($ingredients ) will evaluate to 0 which is also what is known as a 
    'falsey' value*/
            if (count($recipe['ingredients'])) {
                echo '<ul>';
    //for multiple ingredients output each ingridient             
                foreach($recipe['ingredients'] as $index=>$ingredient) {              
                    echo '<li>'.$ingredient.'</li>';
                }
                echo '</ul>';
            }
        }
        echo '</td>';
        echo '<td>';
        echo '<a href="../recipe/recipe.php?action=edit&id='.$id.'"><i class="material-icons">edit</i></a>';
        echo '<i class="material-icons">delete</i>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';

?>	

    <script type="text/javascript" src="modal.js"></script>
</body>
</html>
