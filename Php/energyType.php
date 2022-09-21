<?php 
class energyType {
	
	private $energyType;
	
	public function __construct($energyType)
	{
		$this->energyType = $energyType;
	}

	public function __toString() {
		return json_encode($this);
	}
}

$energyTypeLightning = new energyType('Lightning');
$energyTypeFire = new energyType('Fire');
$energyTypeWater = new energyType('Water');
$energyTypefighting = new energyType('Fighting');

?>