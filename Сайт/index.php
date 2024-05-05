<?php
session_start();
$_SESSION['products_basket'] = array();
$_SESSION['products_col'] = 0;
$_SESSION['products_price'] = 0;
$title = "Главная";
require_once "blocks/header.php"
	?>
<section class="backgrounds">
	<div class="main-1">
		<div class="slider">
			<div class="slide active">
				<img src="img\slider-img\slider-img-1.jpg" alt="">
				<h1>Выгодные цены</h1>
			</div>
			<div class="slide">
				<img src="img\slider-img\slider-img-2.jpg" alt="">
				<h1>Большой ассортимент</h1>
			</div>
			<div class="slide">
				<img src="img\slider-img\slider-img-3.jpg" alt="">
				<h1>Высокое качество</h1>
			</div>
			<button class="prev"><img src="img\slider-img\left.png" alt=""></button>
			<button class="next"><img src="img\slider-img\right.png" alt=""></button>
		</div>
	</div>
	<div class="main-2">
		<div class="main-head">
			<h1>Популярные товары</h1>
		</div>
		<div class="main-body"></div>
	</div>
	<div id="ref" class="main-3">
		<div class="registr">
			<div class="registr-header">
				<h1>Регистрация</h1>
			</div>
			<form class="registr-body" action="../php/registration.php" method="post">
				<div class="fields">
					<label for="exampleInputLogin">Логин</label>
					<input type="text" name="login" id="exampleInputLogin">
				</div>
				<div style="color:#dc3545;"><?= $_SESSION['error_login'] ?></div>
				<div class="fields">
					<label for="exampleInputEmail">Электронная почта</label>
					<input type="email" name="email" id="exampleInputEmail">
				</div>
				<div style="color:#dc3545;"><?= $_SESSION['error_email'] ?></div>
				<div class="fields">
					<label for="exampleInputPhone">Мобильный телефон</label>
					<input type="tel" name="phone_number" id="exampleInputLogin">
				</div>
				<div style="color:#dc3545;"><?= $_SESSION['error_phone'] ?></div>
				<div class="fields">
					<label for="exampleInputAddres">Адрес</label>
					<input type="text" name="addres" id="exampleInputLogin">
				</div>
				<div style="color:#dc3545;"><?= $_SESSION['error_addres'] ?></div>
				<div class="fields">
					<label for="exampleInputPassword1">Пароль</label>
					<input type="password" name="password1" id="exampleInputPassword1">
				</div>
				<div class="fields">
					<label for="exampleInputPassword2">Повторите пароль</label>
					<input type="password" name="password2" id="exampleInputPassword2">
				</div>
				<div style="color:#dc3545;"><?= $_SESSION['error_password'] ?></div>
				<br><button type="submit" class="btn-submit">Зарегистрироваться</button>
				<div style="color:#198754;"><?= $_SESSION['success'] ?></div>
			</form>
		</div>
		<div class="sign">
			<div class="sign-header">
				<h1>Вход</h1>
			</div>
			<form class="sign-body" action="../php/signin.php" method="post">
				<div class="fields">
					<label for=" exampleInputLogin">Логин</label>
					<input type="text" name="login" id="exampleInputLogin">
				</div>
				<div class="fields">
					<label for="exampleInputPassword">Пароль</label>
					<input type="password" name="password" id="exampleInputPassword">
				</div>
				<div style="color:#dc3545;"><?= $_SESSION['error'] ?></div>
				<br><button type="submit" class="btn-submit">Войти</button>
				<div style="color:#198754;"><?= $_SESSION['success_enter'] ?></div>
			</form>
		</div>
	</div>
</section>
<?php
require_once "blocks/footer.php"
	?>