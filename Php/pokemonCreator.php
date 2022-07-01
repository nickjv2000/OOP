<?php 

$pokemonVariable = array($pikachu, $charmeleon);
$pokemons = array('Pikachu', 'Charmeleon');				

for ($i=0; $i < count($pokemons); $i++) { 
	print_r('<h3>' . $pokemons[$i] . '</h3>');
	print_r('<pre>Name: ' . $pokemonVariable[$i]->name . '</pre>'); 
	print_r('<pre>Type: ' . $pokemonVariable[$i]->energytype . '</pre>');	
	print_r('<pre>Hitpoints: ' . $pokemonVariable[$i]->hitpoints . '</pre>');
	print_r('<pre>Health: ' . $pokemonVariable[$i]->health . '</pre>');
	print_r('<pre>Attack 1: ' . $pokemonVariable[$i]->attack1 . '</pre>');
	print_r('<pre>Attack 2: ' . $pokemonVariable[$i]->attack2 . '</pre>');
	print_r('<pre>Weakness: ' . $pokemonVariable[$i]->weakness . '</pre>');
	print_r('<pre>Strength: ' . $pokemonVariable[$i]->resistance . '</pre>');	
	print_r('<br>');
}