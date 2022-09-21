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
}
