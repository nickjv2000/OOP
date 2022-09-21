<?php 
include('resistanceType.php');
include('energyType.php');
include('weaknessType.php');

// The main Pokemon class to create the properties & constructor to make a pokemon
class Pokemon{

	// all the properties with a protected visibility to make the values hidden but useable within the same class or inheratance classes
	protected $name;
	protected $energyType;
	protected $hitpoints;
	protected $health;
	protected $attack1;
	protected $dmg1;
	protected $attack2;
	protected $dmg2;
	protected $weaknessType;
	protected $resistanceType;
	protected $worth;
	protected $multiplier;

	// parent construction function to create a pokemon
	public function __construct($name, $energyType, $hitpoints, $health, $attack1, $dmg1, $attack2, $dmg2, $weaknessType, $resistanceType, $worth, $multiplier)
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
			$this->worth = $worth;
			$this->multiplier = $multiplier;
		}

	public function __toString() {
		return json_encode($this);
	}

	public function setHitpoints($hitpoints){
		$this->hitpoints = $hitpoints;
	}

	// function to get all the values for the properties to then echo them on the index page
	public function getName()		{return $this->name;}
	public function getEnergytype() {return $this->energyType;}
	public function getHitpoints()  {return $this->hitpoints;}
	public function getHealth()		{return $this->health;}
	public function getAttack1()	{return $this->attack1;}
	public function getDmg1()		{return $this->dmg1;}
	public function getAttack2()	{return $this->attack2;}
	public function getDmg2()		{return $this->dmg2;}		
	public function getWeakness() 	{return $this->weaknessType;}
	public function getResistance()	{return $this->resistanceType;}
	public function getWorth()		{return $this->worth;}
	public function getMultiplier()	{return $this->multiplier;}
}


// Pikachu class to create a Pikachu object
class Pikachu extends Pokemon{ 	
	public function __construct($name) {
		parent::__construct($name, $energyTypeLightning, 60, 60, "Electric Ring", 50, "Pika Punch", 20, $fireWeakness, $fightingResistance, 20, 1.5);
	}
}

// Charmeleon class to create a Charmeleon object
class Charmeleon extends Pokemon{
		public function __construct($name) {
		parent::__construct($name, $energyTypeFire, 60, 60, "Headbutt", 10, "Flare", 30, $waterWeakness, $lightningResistance, 10, 2);
	}
}