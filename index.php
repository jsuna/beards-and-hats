<?php
//using a PHP file to be served through apache server

?>
<html>
<head>
	<title>Recipe App</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <a href="login.php">Login</a>
</head>
<body>
	<h1>Recipe Application</h1>
	<p>This is a quickly though of application to display recipes and ingredients for my weekly meal planning</p>
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

