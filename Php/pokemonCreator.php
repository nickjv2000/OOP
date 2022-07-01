<?php 

$pokemonVariable = array($pikachu, $charmeleon);
$pokemons = array('Pikachu', 'Charmeleon');				

for ($i=0; $i < count($pokemons); $i++) { 
	print_r('<h3>' . $pokemons[$i] . '</h3>');
	print_r('<pre>' . $pokemonVariable[$i]->name . '</pre>'); 
	print_r('<pre>' . $pokemonVariable[$i]->energytype . '</pre>');	
	print_r('<pre>' . $pokemonVariable[$i]->hitpoints . '</pre>');
	print_r('<pre>' . $pokemonVariable[$i]->health . '</pre>');
	print_r('<pre>' . $pokemonVariable[$i]->attack1 . '</pre>');
	print_r('<pre>' . $pokemonVariable[$i]->attack2 . '</pre>');
	print_r('<pre>' . $pokemonVariable[$i]->weakness . '</pre>');
	print_r('<pre>' . $pokemonVariable[$i]->resistance . '</pre>');	
	print_r('<br>');
}