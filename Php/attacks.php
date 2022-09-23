<?php 

class attacks {

	private $attack1;
	private $attack2;

	public function __construct($attack, $attackDamage)
	{
		$this->attack = $attack;
		$this->attackDamage = $attackDamage;
	}

	public function __toString() {
		return json_encode($this);
	}

public function getAttackName() {return $this->attack;}
public function getAttackDamage() {return $this->attackDamage;}

}

$electricRing = new Attacks('Electric Ring', 50);
$pikaPunch = new Attacks('Pika Punch', 20);
$headButt = new Attacks('Head butt', 10);
$flare = new Attacks('Flare', 30);
