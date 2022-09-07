<?php 

include('resistanceType.php');
include('energyType.php');
include('weaknessType.php');

class Pokemon{
	public $name;
	public $hitpoints;
	public $health;
	public $attack1;
	public $dmg1;
	public $attack2;
	public $dmg2;
	public $energytype;
	public $weakness;
	public $resistance;

	public function __construct($name, $energyType, $hitpoints, $health, $attack1, $dmg1, $attack2, $dmg2, $weaknessType, $resistanceType)
		{
			$this->name = $name;
			$this->energyType = $energytype;
			$this->hitpoints = $hitpoints;
			$this->health = $health;
			$this->attack1 = $attack1;
			$this->dmg1 = $dmg1;
			$this->attack2 = $attack2;
			$this->dmg2 = $dmg2;
			$this->weaknessType = $weakness;
			$this->resistanceType = $resistance;
		}

	public function __toString() {
		return json_encode($this);
	}
}

class Pikachu extends Pokemon{ 

}

class Charmeleon extends Pokemon{

}

$pikachu = new Pikachu('LightningRat', $energyTypeLightning, 60, 60, 'Electric Ring', 50, 'Pika Punch', 20, $fightingResistance, $fireWeakness);

$charmeleon = new Charmeleon('FireMonster', $energyTypeFire, 60, 60, 'Headbutt', 10, 'Flare', 30, $waterResistance, $lightningWeakness);

$rat = $pikachu->name;
$char = $charmeleon->name;