<?php

namespace Game;

class Deck {

	protected $cards;

	public function setCards($cards)
	{
		$this->cards = $cards;
	}

	public function dealCard() {
		return array_shift($this->cards);
	}

	public function getRemainingCardsCount(){
		return count($this->cards);
	}

	public function shuffle(){
		shuffle($this->cards);
	}

	public function getCards(){
		return $this->cards;
	}

}