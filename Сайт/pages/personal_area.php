<?php
$title = "Личный кабинет";
require_once "../blocks/header.php"
	?>
<section class="backgrounds">
	<div class="personal-container">
		<div class="head1">
			<h1 class="text-centre text-dark">Личный кабинет</h1>
		</div>
		<div class="head2">
			<h3 class="text-centre text-dark pt-5">Данные пользователя</h3>
		</div>
		<form class="personal-form" action="../php/updating_user.php" method="post">
			<div class="fields">
				<label for="exampleInputLogin" class="form-label">Логин</label>
				<input type="text" value="<?= $_SESSION['user']['login'] ?>" name="login" class="form-control"
					id="exampleInputLogin">
			</div>
			<div style="color:#dc3545;"><?= $_SESSION['error_login'] ?></div>
			<div class="fields">
				<label for="exampleInputEmail" class="form-label">Электронная почта</label>
				<input type="email" value="<?= $_SESSION['user']['email'] ?>" name="email" class="form-control"
					id="exampleInputEmail">
			</div>
			<div style="color:#dc3545;"><?= $_SESSION['error_email'] ?></div>
			<div class="fields">
				<label for="exampleInputPhone" class="form-label">Мобильный телефон</label>
				<input type="tel" value="<?= $_SESSION['user']['phone_number'] ?>" name="phone_number"
					class="form-control" id="exampleInputLogin">
			</div>
			<div style="color:#dc3545;"><?= $_SESSION['error_phone'] ?></div>
			<div class="fields">
				<label for="exampleInputAddres" class="form-label">Адрес</label>
				<input type="text" value="<?= $_SESSION['user']['addres'] ?>" name="addres" class="form-control"
					id="exampleInputLogin">
			</div>
			<div style="color:#dc3545;"><?= $_SESSION['error_addres'] ?></div>
			<div class="fields">
				<label for="exampleInputPassword1" class="form-label">Старый пароль</label>
				<input type="password" name="old_password" class="form-control" id="exampleInputPassword1">
			</div>
			<div class="fields">
				<label for="exampleInputPassword2" class="form-label">Новый пароль</label>
				<input type="password" name="new_password" class="form-control" id="exampleInputPassword2">
			</div>
			<div style="color:#dc3545;"><?= $_SESSION['error_password'] ?></div>
			<div class="buttons">
				<a href="/php/logout.php" class="btn-submit">Выйти</a>
				<button style="margin-left:10px" type="submit" class="btn-submit">Изменить данные</button>
			</div>
			<div style="color:#198754;"><?= $_SESSION['user_updated'] ?></div>
		</form>
	</div>
</section>
<?php
require_once "../blocks/footer.php"
	?>