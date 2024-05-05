<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/img/pc-display.svg" type="image/x-icon">
	<link rel="stylesheet" href="../CSS/style.css">
	<title><?= $title ?></title>
</head>

<body>
	<div class="wrapper">
		<header>
			<div class="container-head">
				<div class="head-1">
					<h2 class="logo">line</h2>
				</div>
				<div class="head-2">
					<a href="/index.php">Главная</a>
					<ul>
						<li><a href="/pages/catalog.php">Каталог товаров</a></li>
						<?php if ($_SESSION['enter']): ?>
							<li><a href="/pages/personal_area.php">Личный кабинет</a></li>
						<?php endif ?>
						<li><a href="/pages/about.php">Про нас</a></li>
						<li><a href="/pages/feedback.php">Обратная связь</a></li>
					</ul>
				</div>
				<div class="head-3">
					<a href="#ref" class="btn-green">Регистрация<br> и вход</a>
				</div>
			</div>
		</header>