<?php
require_once __DIR__ . '/common.php';

$history = null; // Odczytaj historię z ciasteczka

if (isset($_POST['choice']) && strlen($_POST['choice']) === 1) {
	// Zapisz wybór użytkownika
}

htmlBegin();

echo '<h2>Historia wyborów użytkownika</h2>';

dump($history);

echo '<h2>Wybierz:</h2>';

// Tutaj dodać należy formularze z możliwością wyboru opcji

echo '<h2>Dodatkowe opcje</h2>';

// Tu należy dodać przycisk, po kliknięciu którego historia zostanie skasowana

htmlEnd();