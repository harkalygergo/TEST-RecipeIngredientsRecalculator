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
	public function RecalculateIngredients(): array
	{
		// The “servings” is also should be integer, the program rounds down this value when recalculate the recipe.
		if( !is_int( $this->recipe_array['servings'] ) )
		{
			$this->recipe_array['servings'] = floor( $this->recipe_array['servings'] );
		}
		$i = 0;
		foreach( $this->recipe_array['ingredients'] as $ingredients )
		{
			// The amount is float expect if the unit is “piece”.
			if( $ingredients['unit'] === 'piece' )
			{
				// If the amount is “piece”, then the program rounds up to integer this value when recalculate the recipe.
				if( !is_int( $ingredients['amount'] ) )
				{
					$this->recipe_array['ingredients'][$i]['amount'] = $this->floatToIntRoundUp( $ingredients['amount'] );
				}
			}
			$i++;
		}
		return $this->recipe_array;
	}

	protected function floatToIntRoundUp( float $float )
	{
		return ceil( $float );
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