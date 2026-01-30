<?php

namespace app\functions;

require_once __DIR__ . '/../models/Card.php';

use app\models\Card;
//initialising  we define the possible suits
$suits = ['H', 'S', 'D', 'C'];
$deck = [];
foreach ($suits as $suit) {
  for ($x = 1; $x < 14; $x++) {

    $newCard = new Card();
    $newCard->value = $newCard->translateValue($x);
    $newCard->suit = $suit;
    array_push($deck, $newCard);
  }
}
var_dump($deck);
