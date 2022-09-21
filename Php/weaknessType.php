<?php 
class weaknessType {

	private $fireWeakness;
	private $waterWeakness;
	private $lightningWeakness;
	private $fightingWeakness;

	public function __construct($energyType, $multiplier)
	{
		$this->energyType = $energytype;
		$this->multiplier = $multiplier;
	}

	public function __toString() {
		return json_encode($this);
	}
}