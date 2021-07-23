<?php

class RecipeIngredientsRecalculator
{
	private $recipe_array;
	public function __construct( $recipeJSON )
	{
		if( $this->isJson( $recipeJSON ) )
		{
			$this->recipe_array = json_decode( $recipeJSON, true );
			$this->RecalculateIngredients();
		}
		else
		{
			$this->showError( "Recipe JSON is invalid!" );
		}
	}

	// Your task is to implement the RecalculateIngredients method, which takes the JSON data, an ingredient name or servings with amount to change as input and returns the recalculated recipe
	public function RecalculateIngredients()
	{
		print_r( $this->recipe_array );
		// The “servings” is also should be integer, the program rounds down this value when recalculate the recipe.
		if( !is_int( $this->recipe_array['servings'] ) )
		{
			$this->recipe_array['servings'] = round( $this->recipe_array['servings'] );
		}
		foreach( $this->recipe_array['ingredients'] as $ingredients )
		{
			// If the amount is “piece”, then the program rounds up to integer this value when recalculate the recipe.
			if( !is_int( $ingredients['amount'] ) )
			{
				$this->recipe_array['ingredients'][$ingredients['amount']] = $this->floatToIntRoundUp( $ingredients['amount'] );
			}
		}
		print_r( $this->recipe_array );
		return $this->recipe_array;
	}

	protected function floatToIntRoundUp( float $float )
	{
		return round( $float );
	}

	public function isJson( $string )
	{
		json_decode($string);
		return json_last_error() === JSON_ERROR_NONE;
	}

	public function showError( string $string )
	{
		echo 'ERROR: '.$string;
	}
}

///////// EXAMPLE RUN
$example_recipe = '{
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
}';
new RecipeIngredientsRecalculator( $example_recipe );