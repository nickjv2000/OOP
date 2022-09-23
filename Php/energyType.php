<?php 
class energyTypes {
	
	private $energyType;
	
	public function __construct($energyType)
	{
		$this->energyType = $energyType;
	}

	public function __toString() {
		return json_encode($this);
	}
}

$energyTypeLightning = new energyTypes('Lightning');
$energyTypeFire = new energyTypes('Fire');
$energyTypeWater = new energyTypes('Water');
$energyTypefighting = new energyTypes('Fighting');

?>