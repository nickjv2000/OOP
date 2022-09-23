<?php 

// Charmeleon class to create a Charmeleon object
class Charmeleon extends Pokemon{
		public function __construct($name, $energyType, $hitpoints, $health, $attack1, $attack2, $weaknessType, $resistanceType, $worth, $multiplier) {
		parent::__construct($name, $energyType, $hitpoints, $health, $attack1, $attack2, $weaknessType, $resistanceType, $worth, $multiplier);
	}
}

?>