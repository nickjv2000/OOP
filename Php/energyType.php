<?php 
class energyType {
	
	private $energyType;
	
	public function __construct($energyType)
	{
		$this->energyType = $energyType;
	}

	public function __toString() {
		return json_encode($this);
	}
}

?>