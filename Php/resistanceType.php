<?php 
class resistanceType {

	private $resistanceType;

	public function __construct($energyType, $worth)
	{
		$this->energyType = $energyType;			
		$this->worth = $worth;
	}

	public function __toString() {
		return json_encode($this);
	}
}

$fireResistance = new resistanceType('Water', 20);
$waterResistance = new resistanceType('Fighting', 5);
$lightningResistance = new resistanceType('Fire', 10);
$fightingResistance = new resistanceType('Lightning', 20);

?>