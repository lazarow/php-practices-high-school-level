<?php
define('BG_DATA', '#F7EDBF');
define('BG_ANSWER', '#D0E799');
define('BG_DANGER', '#F2DEDE');

/**
 * Display the formatted dump of a variable.
 * @param mixed $var The variable to display.
 * @param string $bgcolor The color of the background (optional).
 */
function dump($var, $bgcolor = null) {
	echo is_null($bgcolor) ? '<pre>' : '<pre style="background-color: ' . $bgcolor . ';">';
	is_array($var) ? print_r($var) : var_dump($var);
	echo '</pre>';
}

/**
 * The beginning of a page.
 */
function htmlBegin() {
	echo <<<'EOD'
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style type="text/css">
			pre { border: 0; }
		</style>
	</head>
	<body style="padding: 20px;">
EOD;
}

/**
 * The end of a page.
 */
function htmlEnd() {
	echo <<<'EOD'
	</body>
</html>
EOD;
}

/**
 * Get random data.
 * @param int $total The total number of elements.
 * @param array $range The range of values.
 * @return array
 */
function randomData($total = 20, $range = [-10, 10]) {
	$data = [];
	for ($i = 0; $i < $total; ++$i) {
		$data[$i] = rand($range[0], $range[1]);
	}
	return $data;
}

/**
 * Get random two-dimensional data.
 * @param int $total1 The total number of first-dimensional elements.
 * @param int $total2 The total number of second-dimensional elements.
 * @param array $range The range of values.
 * @return array
 */
function random2DData($total1 = 10, $total2 = 10, $range = [-10, 10]) {
	$data = [];
	for ($i = 0; $i < $total1; ++$i) {
		for ($j = 0; $j < $total2; ++$j) {
			$data[$i][$j] = rand($range[0], $range[1]);
		}
	}
	return $data;
}