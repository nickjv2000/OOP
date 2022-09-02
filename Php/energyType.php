<?php 
$energyTypeFire;
$energyTypeWater;
$energyTypeLightning;
$energyTypeFightning;

class energyType {

	public function __construct($energyTypeFire, $energyTypeWater, $energyTypeLightning, $energyTypeFighting)
		{
			$this->energyType = $energyTypeFire;
			$this->energyType = $energyTypeWater;
			$this->energyType = $energyTypeLightning;
			$this->energyType = $energyTypeFighting;
		}

	public function __toString() {
		return json_encode($this);
	}
}

$energyTypeFire = "Fire energy type";
$energyTypeLightning = "Lightning energy type";
$energyTypeWater = "Water energy type";
$energyTypeFighting = "Fighting energy type";