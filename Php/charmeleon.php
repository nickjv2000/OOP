<?php 

// Charmeleon class to create a Charmeleon object
class Charmeleon extends Pokemon{
		public function __construct($name) {
		parent::__construct($name, $energyTypeFire, 60, 60, "Headbutt", 10, "Flare", 30, $waterWeakness, $lightningResistance, 10, 2);
	}
}

?>