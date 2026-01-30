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
function checkHand($hand)
{
  $flush = true;
  for ($x = 1; $x < 5; $x++) {
    if ($hand[0]->suit !== $hand[$x]) $flush = false;
  }

  return $flush;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poker Flush</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>
  <header>

    <h1 class="text-center text-2xl p-2 bg-slate-500 text-white">Welcome to CodeWars</h1>
    <h2 class="text-center py-2 bg-slate-200">
      Poker Flush
    </h2>

  </header>
  <main class="container mx-auto ">
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
      <div class="my-6 flex justify-center">
        <?php
        foreach ($hand as $card) {
        ?>
          <div class="p-3 <?php if ($card->suit == 'H' || $card->suit == 'D')             echo "text-red-500";
                          else echo "text-black"; ?> ">
            <div class="flex">
              <?php echo $card->translateValue() ?>
              <i class="bi bi-suit-<?php echo $card->translateSuit() ?>-fill"></i>
            </div>


          </div>
        <?php
        }

        ?>
      </div>
      <div class="text-center my-3"> <?php
                                      if (checkHand($hand)) echo 'You made It!!! That\'s a FLUSH!!!!';
                                      else echo 'OH NOO! That\'s not a FLUSH!!!! try again!!'
                                      ?>
      <?php } ?>

      <form action="index.php" class="flex justify-center mt-3">
        <input type="hidden" name="give-cards" value="true">
        <button class="px-4 py-2 border rounded-lg bg-green200">Show Cards</button>
      </form>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>