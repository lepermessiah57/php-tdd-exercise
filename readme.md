# PHP TDD Exercise
A PHP TDD Exercise I did on a whim with a new co-worker as part of thier
onboarding process.


## Setup
* Install [composer](http://getcomposer)
* From the project root: ``composer install --dev`
* Run ``php ./vendor/bin/phpunit.php -c test/phpunit.xml``


## WAR (Card Game)
standard 52 card deck
two players
start with equal halves of the deck
"Battle" - each player flips over a card, player with highest card takes both and places them on the bottom of his deck
"War" - during a battle, both cards have the same value.  3 cards are flipped over and the 4th card is turned up in battle.
"nX-War" - during war, the cards are identical, continue until someone wins
If during a war, a player runs out of cards, the last card they have will be used in the battle.  
   Players will only play the same amount of cards.

Card Values -> 2,3,4,5,6,7,8,9,10,11(J),12(Q),13(K),14(A)
Winner - ends up with all the cards