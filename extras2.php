<?php
require_once __DIR__ . '/common.php';

htmlBegin();

/*
 * Zadanie 1
 * 
 * Napisz funkcję rysującą tabele HTML z pokolorowanymi komórkami. W komórkach tabeli mają znaleźć się litery
 * z łańcucha tekstowego $input. Litery o nieparzystym indeksie niech będą czarne na białym tle, pozostałe 
 * to białe litery na czarnym tle.
 */
function drawColoredTable($input) {
	// Code here...
}
drawColoredTable('War, has never been so much fun.');
drawColoredTable('All You Need Is Love.');
drawColoredTable('Heard ten thousand whispering and nobody listening.');

/*
 * Zadanie 2
 * 
 * Napisz funkcję zwracającą łańcuch tekstowy zawierający choinkę za pomocą znaków `*` do n-teego poziomu.
 * Przykład do 3 poziomu:
 *   *
 *  ***
 * *****
 */
function drawChristmasTree($n) {
	$output = '';
	// Code here...
	return $output;
}
dump(drawChristmasTree(5));
dump(drawChristmasTree(7));
dump(drawChristmasTree(9));

/*
 * Zadanie 3
 * 
 * Napisz funkcję rysującą spirale Ulama o boku $n (nie ważne czy będzie to tabela czy zwykły tekst - ważne 
 * aby było czytelne).
 * Więcej na temat tego co to spirala Ulama na:
 * http://zobaczycmatematyke.pl/2015/3_pawel_osikowski/w_spiralaulama.html
 */
function ulamSpiral($n) {
	// Code here...
}
ulamSpiral(4);
ulamSpiral(6);

htmlEnd();