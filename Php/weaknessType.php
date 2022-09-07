<?php 
class weaknessType {

	public $fireWeakness;
	public $waterWeakness;
	public $lightningWeakness;
	public $fightingWeakness;

	public function __construct($fireWeakness, $waterWeakness, $lightningWeakness, $fightingWeakness)
		{
			$this->weakness = $fireWeakness;
			$this->weakness = $waterWeakness;
			$this->weakness = $lightningWeakness;
			$this->weakness = $fightingWeakness;
		}

	public function __toString() {
		return json_encode($this);
	}
}

$fireWeakness = 1.5;
$waterWeakness = 2;
$lightningWeakness = 1.75;
$fightingWeakness = 1.5;