# CODEWARS POKER-FLUSH

Determine if the poker hand is flush, meaning if the five cards are of the same suit.

Your function will be passed a list/array of 5 strings, each representing a poker card in the format "5H" (5 of hearts), meaning the value of the card followed by the initial of its suit (Hearts, Spades, Diamonds or Clubs). No jokers included.

Your function should return true if the hand is a flush, false otherwise.

The possible card values are 2, 3, 4, 5, 6, 7, 8, 9, 10, J, Q, K, A

## Examples

- ["AS", "3S", "9S", "KS", "4S"] ==> true

- ["AD", "4S", "7H", "KS", "10S"] ==> false

# Il mio approcio:

1- creazione della classe Card (utilizzata come fosse in laravel e con filesystem ordinato)

- funzioni relative alla classe prettamente per visualizzazione (translateValue() e translateSuit() rendono lo script user friendly e più immediato)

2- creazione di una funzione createDeck.php che "assembla" il mazzo ordinato al termine della quale ci troviamo 52 carte da gioco

3- tutto in una pagina: la comanda dell'esercizio scompare non appena si clicca sul bottone che poi triggera una serie di funzioni:

- giveNewHand($deck) : esegue uno shuffle nell'array $deck che contiene tutte le carte ordinate , effettua uno slice delle prime 5 carte e le restituisce come $hand
- per ogni carta viene visualizzato il valore ($card->translateValue()) (eg: 1 diventa A) e il seme ($card->translateSuit()) tradotto in modo da richiamare un'icona di bootstrap icon
  -function checkHand($hand) invece si occupa di controllare che tutte le carte siano dello stesso seme ($card->suit) e di fare l'echo del messaggio corrispondente

essendo il tutto eseguito con un form, lo script viene eseguito ogni qual volta si clicchi sul pulsante e viene re iterato partendo dal mazzo ordinato.
