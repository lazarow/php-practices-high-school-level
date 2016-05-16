<?php
require_once __DIR__ . '/common.php';

htmlBegin();

/*
 * Zadanie 1
 * 
 * Napisz funkcję jednoargumentową, przyjmującą numer PESEL (jako łańcuch tekstowy). Wyciągnij z niego płeć oraz
 * datę urodzenia.
 */
function decodePESEL($pesel) {
	$birthday = null;
	$genre = null;
	// Code here...
	dump($birthday);
	dump($genre);
}
decodePESEL('75060318433');
decodePESEL('99052912180');
decodePESEL('14262412260');

/*
 * Zadanie 2
 * 
 * Napisz funkcję przyjmującą łancuch tektowy i wyświetl co drugi znak.
 */
function everySecondCharacter($input) {
	$output = '';
	// Code here...
	dump($output);
}
everySecondCharacter('War, has never been so much fun.');
everySecondCharacter('All You Need Is Love.');
everySecondCharacter('Heard ten thousand whispering and nobody listening.');

/*
 * Zadanie 3
 * 
 * Napisz funkcję przyjmującą dwa argumenty liczbowe (liczby naturalne). Jeżeli dwie liczby mają taki sam `digital root`
 * (https://en.wikipedia.org/wiki/Digital_root) zwróć true, w innym przypadku zwróć false.
 * Zastosuj funkcję rekurencyjną!
 */
function compareDigitalRoots($a, $b) {
	// Code here...
}
dump(compareDigitalRoots(522, 27));
dump(compareDigitalRoots(45613, 4852));

htmlEnd();