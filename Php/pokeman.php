<?php 
include('resistanceType.php');
include('energyType.php');
include('weaknessType.php');
include('pikachu.php');
include('charmeleon.php');
include('attacks.php');

// The main Pokemon class to create the properties & constructor to make a pokemon
class Pokemon{

	// all the properties with a protected visibility to make the values hidden but useable within the same class or inheratance classes
	private $name;
	private $energyType;
	private $hitpoints;
	private $health;
	private $attack1;
	private $dmg1;
	private $attack2;
	private $dmg2;
	private $weaknessType;
	private $resistanceType;
	private $worth;
	private $multiplier;

	// parent construction function to create a pokemon
	public function __construct($name, $energyType, $hitpoints, $health, $attack1, $attack2, $weaknessType, $resistanceType, $worth, $multiplier)
		{
			$this->name = $name;
			$this->energyType = $energyType;
			$this->hitpoints = $hitpoints;
			$this->health = $health;
			$this->attack1 = $attack1;
			$this->attack2 = $attack2;
			$this->weaknessType = $weaknessType;
			$this->resistanceType = $resistanceType;
			$this->worth = $worth;
			$this->multiplier = $multiplier;
		}

	public function __toString() {
		return json_encode($this);
	}


	//setter for hitpoints
	public function setHitpoints($hitpoints){
		$this->hitpoints = $hitpoints;
	}

	// function to get all the values for the properties to then echo them on the index page
	public function getName()		{return $this->name;}
	public function getEnergytype() {return $this->energyType;}
	public function getHitpoints()  {return $this->hitpoints;}
	public function getHealth()		{return $this->health;}		
	public function getWeakness() 	{return $this->weaknessType;}
	public function getResistance()	{return $this->resistanceType;}
	public function getWorth()		{return $this->worth;}
	public function getMultiplier()	{return $this->multiplier;}
	public function getAttack1() 	{return $this->attack1;}
	public function getAttack2() 	{return $this->attack2;}
}
