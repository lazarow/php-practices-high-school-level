<?php
require_once __DIR__ . '/common.php';

htmlBegin();

// Zadanie 1
dump('Zadanie 1');
$input = randomData(10, [1, 10]);
dump($input, BG_DATA);
$output = [];
/**
 * Przepisz do tablicy $output elementy tablicy $input usuwając wystąpienia liczb 2, 5 i 8.
 */
// Code here...
dump($output, BG_ANSWER);

// Zadanie 2
dump('Zadanie 2');
$input = randomData(10);
dump($input, BG_DATA);
$output = [];
/**
 * Przepisz do tablicy $output elementy tablicy $input usuwając wystąpienia maksymalnej wartości z tablicy $input
 * (znajdź odpowiednią funkcje w dokumentacji PHP).
 */
// Code here...
dump($output, BG_ANSWER);

// Zadanie 3
dump('Zadanie 3');
$input = randomData(20);
dump($input, BG_DATA);
$output = [];
/**
 * Przepisz do tablicy $output elementy tablicy $input tak aby najpierw znajdowały się w niej elementy ujemne a 
 * potem dodatnie - ISTOTNA jest kolejność wystąpień w tablicy $input, musi ona zostać zachowana, dane nie mają być 
 * posortowane a jedynie podzielone na ujemne / dodatnie.
 */
// Code here...
dump($output, BG_ANSWER);

// Zadanie 4
dump('Zadanie 4');
$input = random2DData(5, 5, [-1, 1]);
dump($input, BG_DATA);
/**
 * Dla zadanej tablicy dwuwymiarowej wypisz adresy (numer wiersza i kolumny) wszystkich rekordów, które mają 
 * wartość równą 0.
 */
// Code here...

htmlEnd();