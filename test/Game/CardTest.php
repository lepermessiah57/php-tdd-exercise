<?php

namespace Game;

class CardTest extends \PHPUnit_Framework_TestCase {
	private $card;

	public function setUp(){
		$this->card = new Card();
	}

	public function testCanGetValue(){
		$this->card->setValue(2);

		$this->assertEquals(2, $this->card->getValue());
	}
}