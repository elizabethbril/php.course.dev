<?php

// Установка локали и выбор значений даты
$day = date('j');
$mon = date('F');
$year = date('Y');
$hour = (int) strftime("%H");
$welcome = "";

if ($hour > 0 && $hour < 6) {
	$welcome = "Good night ";
} else if ($hour >= 6 && $hour < 12) {
	$welcome = "Good morning ";
} else if ($hour >= 12 && $hour < 18) {
	$welcome = "Good afternoon";
} else if ($hour >= 18 && $hour < 23) {
	$welcome = "Good evening ";
} else {
	$welcome = "Good night ";
}

$leftMenu = [
	['link' => 'Домой', 'href' => 'index.php'],
	['link' => 'О нас', 'href' => 'index.php?id=about'],
	['link' => 'Контакты', 'href' => 'index.php?id=contact'],
	['link' => 'Таблица умножения', 'href' => 'index.php?id=table'],
	['link' => 'Калькулятор', 'href' => 'index.php?id=calc']
];
?>