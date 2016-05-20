<?php
require_once __DIR__ . '/common.php';

htmlBegin();
$link = mysql_connect('localhost:3306', 'root', 'root');
if (empty($link)) {
	die('Błąd połączenia do bazy danych.' . mysql_error());
}

mysql_select_db('praktyki2016');

$sql = 'SET NAMES utf8';
$result = mysql_query($sql);

// Czym jest $result?
dump($sql, BG_DATA);
dump($result);

$sql2 = 'SELECT KlientId, Adres, Imię, Nazwisko FROM Klienci';
dump($sql2, BG_DATA);

$clients = mysql_query($sql2);
dump($clients);
dump(mysql_num_rows($clients));
echo '<pre>';
while ($row = mysql_fetch_array($clients, MYSQL_NUM)) {
	array_walk($row, function ($value, $key) { echo '[' . $key . '] => ' . $value . ';'; });
	echo PHP_EOL;
}
echo '</pre>';
echo '<pre>';
while ($row = mysql_fetch_array($clients, MYSQL_NUM)) {
	array_walk($row, function ($value, $key) { echo '[' . $key . '] => ' . $value . ';'; });
	echo PHP_EOL;
}
echo '</pre>';
echo '<pre>';
mysql_data_seek($clients, 0);
while ($row = mysql_fetch_array($clients, MYSQL_NUM)) {
	array_walk($row, function ($value, $key) { echo '[' . $key . '] => ' . $value . ';'; });
	echo PHP_EOL;
}
echo '</pre>';
echo '<pre>';
mysql_data_seek($clients, 0);
while ($row = mysql_fetch_array($clients, MYSQL_ASSOC)) {
	array_walk($row, function ($value, $key) { echo '[' . $key . '] => ' . $value . ';'; });
	echo PHP_EOL;
}
echo '</pre>';
echo '<pre>';
mysql_data_seek($clients, 0);
while ($row = mysql_fetch_assoc($clients)) {
	array_walk($row, function ($value, $key) { echo '[' . $key . '] => ' . $value . ';'; });
	echo PHP_EOL;
}
echo '</pre>';

$sql3 = 'SELECT * FRO Klienci';
dump($sql3, BG_DATA);
$clients2 = mysql_query($sql3);
dump($clients2);
if ($clients2 === false) {
	dump(mysql_error(), BG_DANGER);
}

$sql4 = 'INSERT INTO Klienci VALUES (NULL, "PHP", "Skrypt", "Localhost")';
dump($sql4, BG_DATA);
/*$result2 = mysql_query($sql4);
dump($result2);
if (empty($result2)) {
	dump(mysql_error(), BG_DANGER);
}
dump(mysql_insert_id(), BG_ANSWER);*/

if (array_key_exists('delete', $_GET)) {
	$sql5 = 'DELETE FROM Klienci WHERE KlientId = ' . (int) $_GET['delete'];
	dump($sql5, BG_DATA);
	$result3 = mysql_query($sql5);
	dump($result3);
	if (empty($result3)) {
		dump(mysql_error(), BG_DANGER);
	}
}

$newClients = mysql_query($sql2);
dump(mysql_num_rows($newClients));
while ($row = mysql_fetch_assoc($newClients)) {
	echo '<p>' . $row['Imię'] . ' ' . $row['Nazwisko'] . ' ';
	echo '<a class="btn btn-danger btn-xs" href="?delete=' . $row['KlientId'] . '">Usuń</a>';
	echo '</p>';
}

$siteroot = current(array_slice(explode('?', $_SERVER['REQUEST_URI']), 0, 1));

$sql6 = 'SELECT * FROM Klienci WHERE Adres LIKE "%Katowice%" AND Imię LIKE "%'
	. (array_key_exists('search', $_POST) ? mysql_escape_string($_POST['search']) : '') . '%"';
dump($sql6, BG_DATA);
$newClients2 = mysql_query($sql6);
dump($newClients2);
if (empty($newClients2)) {
	dump(mysql_error(), BG_DANGER);
}
?>
<form class="form-inline" method="post" action="<?php echo $siteroot ?>">
	<div class="form-group">
		<label>Szukaj</label>
		<input type="text" class="form-control" name="search">
	</div>
	<button type="submit" class="btn btn-default">Wyślij</button>
</form>
<?php

dump(mysql_num_rows($newClients2));
echo '<pre>';
while ($row = mysql_fetch_assoc($newClients2)) {
	array_walk($row, function ($value, $key) { echo '[' . $key . '] => ' . $value . ';'; });
	echo PHP_EOL;
}
echo '</pre>';

/*
 * SELECT * FROM brands WHERE id_user = 2
 * UPDATE brands ... WHERE id_user = 2 AND id = (int) $_POST['id']
 */
mysql_close($link);
htmlEnd();