<?php
require_once __DIR__ . '/common.php';

$siteroot = current(array_slice(explode('?', $_SERVER['REQUEST_URI']), 0, 1));

// CIASTECZKA
$normal_variable = 0;
$cookie_variable = isset($_COOKIE['ciasteczko']) ? (int) $_COOKIE['ciasteczko'] : 0;

$normal_variable++;
$cookie_variable++;

setcookie('ciasteczko', $cookie_variable, time() + 3600);

htmlBegin();

echo '<a href="' . $siteroot . '" class="btn btn-default btn-lg">Strona główna</a>';

echo '<h2>GET i POST</h2>';

echo '<h3>$_GET</h3>';
dump($_GET);
echo '<h3>$_POST</h3>';
dump($_POST);

if ($_GET['action'] == 'doit') {
	echo '<div class="alert alert-success">Oczekiwana reakcja</div>';
}
?>

<h3>Linki</h3>
<a href="?test=abc">Zwykły link</a><br>
<a href="?action=doit">Akcja &rarr; Reakca</a>

<h3>Formularz GET</h3>
<form class="form-inline" method="get" action="<?php echo $siteroot ?>">
	<div class="form-group">
		<label>Test1</label>
		<input type="text" class="form-control" name="test1">
	</div>
	<div class="form-group">
		<label>Test2</label>
		<input type="text" class="form-control" name="test2">
	</div>
	<div class="form-group">
		<label>Test3</label>
		<select class="form-control" name="test3">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="checkbox1"> Zaznacz mnie!
		</label>
	</div>
	<button type="submit" class="btn btn-default">Wyślij</button>
</form>

<h3>Formularz POST</h3>
<form class="form-inline" method="post" action="<?php echo $siteroot ?>">
	<div class="form-group">
		<label>Test1</label>
		<input type="text" class="form-control" name="test1">
	</div>
	<div class="form-group">
		<label>Test3</label>
		<select class="form-control" name="test3">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="checkbox1" value="123"> Zaznacz mnie!
		</label>
	</div>
	<div class="form-group">
		<label>Test[0]</label>
		<input type="text" class="form-control" name="test[0]">
	</div>
	<div class="form-group">
		<label>Test[1][0]</label>
		<input type="text" class="form-control" name="test[1][0]">
	</div>
	<button type="submit" class="btn btn-default">Wyślij</button>
</form>

<h2>CIASTECZKA</h2>
<?php

dump($_COOKIE);

dump($normal_variable);
dump($cookie_variable);

htmlEnd();