<?php 
class weaknessType {

	private $weaknessType;

	public function __construct($energyType, $multiplier)
	{
		$this->energyType = $energytype;
		$this->multiplier = $multiplier;
	}

	public function __toString() {
		return json_encode($this);
	}
}

$fireWeakness = new weaknessType('Lightning', 1.5);
$waterWeakness = new weaknessType('Fire', 2);
$fightingWeakness = new weaknessType('Water', 1.75);
$lightningWeakness = new weaknessType('Fighting', 1.4);

?>