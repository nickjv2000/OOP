<?php 
// Pikachu class to create a Pikachu object
class Pikachu extends Pokemon{ 	
	public function __construct($name) {
		parent::__construct($name, $energyTypeLightning, 60, 60, $electricRing, $pikaPunch, $fireWeakness, $fightingResistance, 20, 1.5);
	}
}

?>