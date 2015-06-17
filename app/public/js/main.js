var app = angular.module('myApp', []);

app.controller('RecipeCtrl', function($scope) {
	$scope.recipes = [
	{'name': 'Salmon',
	 'ingredients': '2-Salmon filet, 2-heads brocolli, agave, dijon mustard, butter, oil'},
	{'name': 'Burrito',
	 'ingredients': 'Ground beef, 1-green peppers, 1-onion, 1-avacado, cheese, tortilla, salsa'},
	{'name': 'Dragon Noodles',
	 'ingredients': 'Noodles, 3-eggs, 1-green peppers, 1/2 package-mushrooms, 2 Tbsp-soy sauce, 2 Tbsp-brown sugar, 2 Tbsp-sirahcha'},

	];
});