<?php 
// Pikachu class extending pokemon to create an object
class Pikachu extends Pokemon{ 	
	public function __construct($name, $energyType, $hitpoints, $health, $attack1, $attack2, $weaknessType, $resistanceType, $worth, $multiplier) {
		parent::__construct($name, $energyType, $hitpoints, $health, $attack1, $attack2, $weaknessType, $resistanceType, $worth, $multiplier);
	}
}
?>