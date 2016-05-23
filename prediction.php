<?php
define(MAX_DEPTH, 3);
$tree = [1 => null];
for ($i = 2; $i < pow(2, MAX_DEPTH) - 1; ++$i) {
	$tree[$i] = 1;
}

var_dump($tree);

/**
 * Left  -> 0
 * Right -> 1
 */
function predict($tree, $sequence) {
	
}
function preorder($i, $tree, $sequence) {
	echo $i;
	$left = 2 * $i;
	$right = 2 * $i + 1;
	if (array_key_exists($left, $tree)) {
		preorder($left, $tree, $sequence);
	}
	if (array_key_exists($right, $tree)) {
		preorder($right, $tree, $sequence);
	}
}
preorder(1, $tree, '');