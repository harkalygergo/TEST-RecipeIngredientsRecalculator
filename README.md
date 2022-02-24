# TEST | Recipe Ingredients Recalculator
##### 2021.07.23.

## Task

### The problem:

The program read a recipe and recalculates ingredients when the amount of any ingredient changes or modify the servings.

### Following the rules below:

 * The recipe is always a JSON object.
 * The ingredients are in direct proportion to each other.
 * The ingredients names are unique, but not require to validate.
 * The amount is float expect if the unit is "piece".
 * If the amount is "piece", then the program rounds up to integer this value when recalculate the recipe.
 * The “servings” is also should be integer, the program rounds down this value when recalculate the recipe.
 * Your task is to implement the RecalculateIngredients method, which takes the JSON data, an ingredient name or servings with amount to change as input and returns the recalculated recipe.
 * You may not use any third party libraries for your solution.

### Pluses:

 * Including automated test to your solution is a plus but not mandatory.
 * Clean Code (by Robert. C. Martin) makes us happy.

### Additional info:

 * User interface is not required.
 * You should use your favorite language, unless we discuss otherwise in advance.
 * You shouldn't write pseudo code. You should write code that you would commit/push to a repository and solves the given problem.
 * You need to write a short documentation into a README.md file that describes one possible way to start your code.
 * You have net maximum 24 hours to submit your solution.
 * You should submit even if you are not fully finished.
 * If you have any further question, don't hesitate to ask.

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

---

## Info

RecipeIngredientsRecalculator is a PHP 7.4 based web application, which validates and recalculates any recipe from given JSON. Example JSON is added and of this README.

## Usage

No need any installation, but requires PHP (recommended 7.4<) and web server (Apache / Nginx / etc.).

Implement `RecipeIngredientsRecalculator` class from index.php file into your software or just include / load attached `index.php` and call `RecipeIngredientsRecalculator()` class by adding a recipe JSON as construct parameter: 

`new RecipeIngredientsRecalculator( $recipeJSON );`
