<?php

namespace app\models;

class Card
{
  public $value; //values are INT from 1 to 13
  public $suit;  //suits are (H)earts,(S)pades,(D)iamonds,(C)lubs

  public function translateValue()
  {
    if ($this->value === 1) return $this->value = "A";
    else if ($this->value === 11) return $this->value = "J";
    else if ($this->value === 12) return $this->value = "Q";
    else if ($this->value === 13) return $this->value = "K";
    else return $this->value;
  }
  public function translateSuit()
  {
    if ($this->suit === 'H') return 'heart';
    else if ($this->suit === 'S') return 'spade';
    else if ($this->suit === 'D') return 'diamond';
    else if ($this->suit === 'C')  return 'club';
  }
}
