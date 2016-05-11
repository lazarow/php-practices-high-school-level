<?php
require_once __DIR__ . '/common.php';

htmlBegin();

// Zadanie 1
dump('Zadanie 1');
$input = randomData(rand(3, 12));
dump($input, BG_DATA);
/**
 * Uzupełnij funkcję aby zwracała ostatni element tablicy.
 */
function topEl($input) {
	// Code here...
}
dump(topEl($input), BG_ANSWER);

// Zadanie 2
dump('Zadanie 2');
$input = randomData(20);
dump($input, BG_DATA);
$output = [];
/**
 * Przepisz dane z tablicy $input do tablicy $output w odwrotnej kolejności.
 */
// Code here...
dump($output, BG_ANSWER);

// Zadanie 3
dump('Zadanie 3');
$input = randomData(7);
dump($input, BG_DATA);
/**
 * W tablicy $input zapisane jest drzewo binarne, zakładamy, że drzewo jest pełne.
 * Napisz procedury przechodzenia drzewa pre-, in-, post- order, zobacz wyjaśnienie na:
 * https://pl.wikipedia.org/wiki/Przechodzenie_drzewa
 * Odwzorowanie drzewa macie na stronie:
 * http://eduinf.waw.pl/inf/alg/003_sort/0014.php#odwzorowanie
 * PAMIĘTAJCIE, że indeksy są od 0!!! zróbcie właściwą korektę.
 * FUNKCJE MAJĄ WYŚWIETLAĆ KOLEJNOŚĆ PRZECHODZENIA ELEMENTÓW!!!
 * należy w kazdej w nich (w ODPOWIEDNIM miejscu) dodać funkcje wyświetlającą np.
 * echo $input[$index] . ' '; (TO TYLKO PRZYKŁAD, zastanowić się jak powinno być)
 */
function preOrder($input, $index) {
	// Code here...
}
function inOrder($input, $index) {
	// Code here...
}
function postOrder($input, $index) {
	// Code here...
}
echo 'Pre-Order:<br>'; preOrder($input, 0); echo '<br>';
echo 'In-Order:<br>'; inOrder($input, 0); echo '<br>';
echo 'Post-Order:<br>'; postOrder($input, 0);

htmlEnd();