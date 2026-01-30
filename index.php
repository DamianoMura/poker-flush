<?php
require('app\functions\createDeck.php');
//we have the deck, now we need to shuffle.
$hand = null;
if (isset($_GET['give-cards'])) {
  $hand = giveNewHand($deck);
}


function giveNewHand($deck)
{

  shuffle($deck);
  $hand = array_slice($deck, 0, 5);
  return $hand;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poker Flush</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>
  <header>

    <h1 class="text-center text-2xl">Welcome to CodeWars</h1>
    <h2 class="text-center">
      Poker Flush
    </h2>

  </header>
  <main class="container mx-auto">
    <?php if ($hand === null) { ?>


      <div class="container mx-auto">
        <p>
          Determine if the poker hand is flush, meaning if the five cards are of the same suit.
        </p>
        <p>
          Your function will be passed a list/array of 5 strings, each representing a poker card in the format "5H" (5 of hearts), meaning the value of the card followed by the initial of its suit (Hearts, Spades, Diamonds or Clubs). No jokers included.
          <strong>I made classes instead of strings =D</strong>
        </p>

        <p>
          Your function should return true if the hand is a flush, false otherwise.
        </p>
        <p>
          The possible card values are 2, 3, 4, 5, 6, 7, 8, 9, 10, J, Q, K, A

        </p>
        <div class="bg-slate-200 p-3 my-3">
          <h5>Examples</h5>
          <p>["AS", "3S", "9S", "KS", "4S"] ==> true</p>
          <p>["AD", "4S", "7H", "KS", "10S"] ==> false</p>
          ["AD", "4S", "7H", "KS", "10S"] ==> false
          </code>
        </div>
      </div>
    <?php } else { ?>
      <div class="container mx-auto">here are your cards</div>

    <?php } ?>

    <form action="index.php" class="flex justify-center">
      <input type="hidden" name="give-cards" value="true">
      <button class="px-4 py-2 border rounded-lg bg-green200">Show Cards</button>
    </form>

  </main>


</body>

</html>