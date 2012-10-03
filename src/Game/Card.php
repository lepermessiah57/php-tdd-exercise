<?php

namespace Game;

class Card{
	
	private $value;

	public function setValue($value){
		if($value <= 11)
			$this->value = $value;
	}

	public function getValue(){
		return $this->value;
	}
}