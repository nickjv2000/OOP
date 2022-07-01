<?php 
$name;
$energytype;
$hitpoints;
$health;
$attack;
$weakness;
$resistance;

class Pokemon {

	public function __construct($name, $energytype, $hitpoints, $attack1, $attack2, $weakness, $resistance)
		{
			$this->name = $name;
			$this->energytype = $energytype;
			$this->hitpoints = $hitpoints;
			$this->attack1 = $attack1;
			$this->attack2 = $attack2;
			$this->weakness = $weakness;
			$this->resistance = $resistance;
		}

	public function __toString() {
		return json_encode($this);
	}

	public function sayName()
	{
		echo '<h4>' . $this->name . '</h4>';
	}
}

$pikachu = new Pokemon('Pika', 'Lightning', '60 hitpoints', 'Electric Ring 50 DMG', 'Pika Punch 20 DMG', 'Fire 1.5x multiplier', 'Fighting 20 points');

$charmeleon = new Pokemon('Charmy', 'Fire', '60 hitpoints', 'Headbutt 10 DMG', 'Flare 30 DMG', 'Water 2.0x multiplier', 'Lightning 10 points');
