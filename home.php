<?php
	include('connectdb.php'); // Includes database connection
	include('header.php');

//using a PHP file to be served through apache server
?>
<html>
<head>
	<title>Recipe App</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>
<body>
	<h1>Recipe Application</h1>
	<p>This is a quickly though of application to display recipes and ingredients for my weekly meal planning</p>
	
	<button id="create-user">Create new user</button>
	<div id="dialog-form" title="Create new user">
  		<p class="validateTips">All form fields are required.</p>
 
  		<form>
    			<fieldset>
      				<label for="recipe-title">Recipe Title</label>
      				<input type="text" name="recipe-title" id="recipe-title" placeholder="Recipe Title" class="text ui-widget-content ui-corner-all">
      				<label for="ingridient-title">Ingridient</label>
      				<input type="text" name="ingridient" id="ingridient" placeholder="Ingridient" class="text ui-widget-content ui-corner-all">
      				<label for="quantity">Quantity</label>
      				<input type="quantity" name="quantity" id="password" placeholder="Quantity" class="text ui-widget-content ui-corner-all">
 
      				<!-- Allow form submission with keyboard without duplicating the dialog button -->
      				<input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
    			</fieldset>
  		</form>
	</div>
 
 
	<div id="users-contain" class="ui-widget">
  		<h1>Existing Users:</h1>
  		<table id="users" class="ui-widget ui-widget-content">
    			<thead>
      				<tr class="ui-widget-header ">
        				<th>Name</th>
        				<th>Email</th>
        				<th>Password</th>
      				</tr>
    			</thead>
    			<tbody>
      				<tr>
        				<td>John Doe</td>
        				<td>john.doe@example.com</td>
        				<td>johndoe1</td>
      				</tr>
    			</tbody>
  		</table>
	</div>
	
	
	
	
   	<table>
    	<tr>
    		<th>Name</th>
    		<th>Ingredients</th>
    		<th>Quantity</th>
    	</tr>
    	<tr>
    		<td rowspan="3">Salmon</td>
    		<td>Salmon filet</td>
    		<td>2</td>
    	</tr>
        <tr>
        	<td>Mustard</td>
        	<td>1 Tbsp</td>
        </tr>
        <tr>
        	<td>Bread Crumbs</td>
        	<td>cover the top</td>
        </tr>
    	<tr>
    		<td rowspan="5">Fish Taco</td>
    		<td>Tilapia filets</td>
    		<td>2</td>
    	</tr>
        <tr>
        	<td>Corn Tortillas</td>
        	<td>1 bag</td>
        </tr>
        <tr>
        	<td>Cabbage</td>
        	<td>1 pre-mix bag</td>
        </tr>
        <tr>
        	<td>Lime</td>
        	<td>1</td>
        </tr>
        <tr>
        	<td>Avacado</td>
        	<td>1</td>
        </tr>
    	<tr>
    		<td rowspan="5">Greek Yogurt Chicken Salad</td>
    		<td>Plain Greek Yogurt</td>
    		<td>8 oz</td>
    	</tr>
        <tr>
        	<td>Fresh Basil</td>
        	<td>2 leaves</td>
        </tr>
        <tr>
        	<td>Artichoke Hearts</td>
        	<td>8 oz</td>
        </tr>
        <tr>
        	<td>Pine Nuts</td>
        	<td>2 Tbsp</td>
        </tr>
        <tr>
        	<td>Red Onion</td>
        	<td>1</td>
        </tr>
    	<tr>
    		<td rowspan="5">Southwest Chicken Skillet</td>
        	<td>Shredded Chicken</td>
        	<td>1 cup</td>
    	</tr>
        <tr>
        	<td>Black Beans</td>
        	<td>1 can</td>
        </tr>
        <tr>
        	<td>Rice</td>
        	<td>1 cup</td>
        </tr>
        <tr>
        	<td>Salsa</td>
        	<td>1 cup</td>
        </tr>
        <tr>
        	<td>Chili Powder</td>
        	<td>1 Tbsp</td>
        </tr>
    </table>
</body>
</html>
