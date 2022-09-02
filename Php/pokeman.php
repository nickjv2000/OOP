<?php 
$name;
$hitpoints;
$health;
$attack1;
$dmg1;
$attack2;
$dmg2;
$energytype;
$weakness;
$resistance;

include('resistanceType.php');
include('energyType.php');
include('weaknessType.php');

class Pokemon{

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

$pikachu = new Pokemon('LightningRat', $energyTypeLightning, 60, 60, 'Electric Ring', 50, 'Pika Punch', 20, $fireWeakness, $fightingResistance);

$charmeleon = new Pokemon('FireMonster', $energyTypeFire, 60, 60, 'Headbutt', 10, 'Flare', 30, $waterResistance, $lightningWeakness);

$rat = $pikachu->name;
$char = $charmeleon->name;



	// repeat
	// change 10 & 1.5 to the values of resistance and weakness
	// give the attacks names to be used aswell as the numeric value 