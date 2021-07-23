# Loginet Homework
## RecipeIngredientsRecalculator
##### 2021.07.23. | Harkály Gergő

## Info

RecipeIngredientsRecalculator is a PHP 7.4 based web application, which validates and recalculates any recipe from given JSON. Example JSON is added and of this README.

## Usage

No need any installation, but requires PHP (recommended 7.4<) and web server (Apache / Nginx / etc.).

Implement `RecipeIngredientsRecalculator` class from index.php file into your software or just include / load attached `index.php` and call `RecipeIngredientsRecalculator()` class by adding a recipe JSON as construct parameter: 

`new RecipeIngredientsRecalculator( $recipeJSON );`

## Example input JSON

```
{
	"title": "Pancake",
	"servings": 4,
	"ingredients": [
		{
			"name": "fluor",
			"amount": 20,
			"unit": "dkg"
		},
		{
			"name": "egg",
			"amount": 2,
			"unit": "piece"
		},
		{
			"name": "milk",
			"amount": 3,
			"unit": "dl"
		},
		{
			"name": "carbonated mineral water",
			"amount": 2,
			"unit": "dl"
		},
		{
			"name": "salt",
			"amount": 1,
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
}
```