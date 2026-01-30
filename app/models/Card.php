<?php

namespace app\models;

class Card
{
  public $value; //values are INT from 1 to 13
  public $suit;  //suits are (H)earts,(S)pades,(D)iamonds,(C)lubs

  public function translateValue($value)
  {
    if ($value === 1) return $this->value = "A";
    else if ($value === 11) return $this->value = "J";
    else if ($value === 12) return $this->value = "Q";
    else if ($value === 13) return $this->value = "K";
    else return $value;
  }
}
