<?php

namespace Game;

class DeckTest extends \PHPUnit_Framework_TestCase {
	
	public function testCanCreateDeck(){
		$this->assertNotNull(new Deck());
	}

	public function testDeckCanBeShuffled(){
		$deck = new Deck();
		$cards = array();
		for($i = 0; $i < 52; $i++){
			$cards[] = new Card();
			$cards[$i]->setValue($i);
		}

		$deck->setCards($cards);
		$deck->shuffle();
		$actual_cards = $deck->getCards();

		$this->assertTrue($cards != $actual_cards);		
	}

	public function testDeckCanDealACard(){
		$cards = array();
		$deck = new Deck();
		$cards[] = new Card();
		$deck->setCards($cards);

		$card = $deck->dealCard();

		$this->assertSame($cards[0], $card);		
	}

	public function testDeckWillRemoveTheCardDealtFromTheDeck(){
		$cards = array();
		$deck = new Deck();
		for($i = 0; $i < 10; $i++){
			$cards[] = new Card();
		}

		$deck->setCards($cards);

		$deck->dealCard();

		$this->assertEquals(9, $deck->getRemainingCardsCount());
	}

	public function testDeckCanDealUntilEmpty(){
		$cards = array();
		$deck = new Deck();
		for($i = 0; $i < 10; $i++){
			$cards[] = new Card();
		}

		$deck->setCards($cards);
		for($i = 0; $i < 10; $i++){
			$deck->dealCard();
		}

		$this->assertEquals(0, $deck->getRemainingCardsCount());
	}

	public function testDeckReturnsNullIfItCantDealAnyMoreCards(){
		$cards = array();
		$deck = new Deck();
		$deck->setCards($cards);

		$this->assertNull($deck->dealCard());
	}
}