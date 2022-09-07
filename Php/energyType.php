<?php 


class energyType {
	// field name type
	public $energyTypeFire;
	public $energyTypeWater;
	public $energyTypeLightning;
	public $energyTypeFightning;
	// constructor sets the name type
	public function __construct($energyTypeFire, $energyTypeWater, $energyTypeLightning, $energyTypeFighting)
		{
			$this->energyType = $energyTypeFire;
			$this->energyType = $energyTypeWater;
			$this->energyType = $energyTypeLightning;
			$this->energyType = $energyTypeFighting;
		}


	// use getters and setters (also for Pokemon)

	public function __toString() {
		return json_encode($this);
	}
}

$energyTypeFire = "Fire energy type";
$energyTypeLightning = "Lightning energy type";
$energyTypeWater = "Water energy type";
$energyTypeFighting = "Fighting energy type";