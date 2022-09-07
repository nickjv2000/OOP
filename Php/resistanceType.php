<?php 
class resistanceType {

	public $fireResistance;
	public $waterResistance;
	public $lightningResistance;
	public $fightingResistance;

	public function __construct($fireResistance, $waterResistance, $lightningResistance, $fightingResistance)
		{
			$this->resistance = $fireResistance;
			$this->resistance = $waterResistance;
			$this->resistance = $lightningResistance;
			$this->resistance = $fightingResistance;
		}

	public function __toString() {
		return json_encode($this);
	}
}

$fireResistance = 12.5;
$waterResistance = 15;
$lightningResistance = 10;
$fightingResistance = 20;