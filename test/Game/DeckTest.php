<?php

namespace Game;

class DeckTest extends \PHPUnit_Framework_TestCase {
	
	public function testCanCreateDeck(){
		$this->assertNotNull(new Deck());
	}

}