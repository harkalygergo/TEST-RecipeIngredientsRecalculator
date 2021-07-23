<?php
// EXAMPLE RUN
include_once ( 'index.php' );
$example_recipe_BAD = '{
	"title": "Pancake",
	"servings": 4.7,
	"ingredients": [
		{
			"name": "fluor",
			"amount": 20.1,
			"unit": "dkg"
		}
		{
			"name": "egg",
			"amount": 2.3,
			"unit": "piece"
		},
	]
}';
$example_recipe_GOOD = '{
	"title": "Pancake",
	"servings": 4.7,
	"ingredients": [
		{
			"name": "fluor",
			"amount": 20.1,
			"unit": "dkg"
		},
		{
			"name": "egg",
			"amount": 2.3,
			"unit": "piece"
		},
		{
			"name": "milk",
			"amount": 3.5,
			"unit": "dl"
		},
		{
			"name": "carbonated mineral water",
			"amount": 2.7,
			"unit": "dl"
		},
		{
			"name": "salt",
			"amount": 1.9,
			"unit": "pinch"
		},
		{
			"name": "oil",
			"amount": 0.75,
			"unit": "dl"
		},
		{
			"name": "oil for cooking",
			"amount": 1,
			"unit": "dl"
		}
	]
}';
echo "<pre>";
print_r( $example_recipe_BAD );
echo "<br>";
print_r( new RecipeIngredientsRecalculator( $example_recipe_BAD ) );
echo "<br>";
print_r( $example_recipe_GOOD );
echo "<br>";
print_r( new RecipeIngredientsRecalculator( $example_recipe_GOOD ) );
echo "</pre>";