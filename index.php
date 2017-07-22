<?php
require_once 'inc/lib.inc.php';
require_once 'inc/data.inc.php';
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Сайт нашей школы</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<?php require_once 'inc/top.inc.php'; ?>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1><?php echo $welcome, "Today is {$hour} o'clock"; ?></h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<?php require_once 'inc/index.inc.php'; ?>
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<?php require_once 'inc/menu.inc.php'; ?>
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			<?php require_once 'inc/bottom.inc.php'; ?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>

</html>