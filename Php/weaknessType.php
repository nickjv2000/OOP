<?php 
class weaknessType {

	private $weaknessType;

	public function __construct($energyType, $multiplier)
	{
		$this->energyType = $energyType;
		$this->multiplier = $multiplier;
	}

	public function __toString() {
		return json_encode($this);
	}
}

?>

