<?php
session_start();
$title = "Обратная связь";
require_once "../blocks/header.php"
	?>
<section class="backgrounds">
	<div class="container-form">
		<div class="form-head">
			<h1 class="text-centre text-dark">Связаться с нами</h1>
		</div>
		<form class="form-body" action="/php/form-contact.php" method="post">
			<div class="fields">
				<label for="exampleFormControlInput">Почтовый адрес</label>
				<input type="email" name="email" id="exampleFormControlInput" placeholder="Введите ваш email">
			</div>
			<div style="color:#dc3545;"><?= $_SESSION['error_email'] ?></div>
			<div class="fields">
				<label for="exampleFormControlSelect">Тема сообщения</label>
				<select name="subject" id="exampleFormControlSelect" aria-label="Default select example">
					<option selected>Отзыв о продукте</option>
					<option>Стать постоянным клиентом</option>
					<option>Сообщить об ошибке</option>
					<option>Оформить возврат</option>
				</select>
			</div>
			<div class="fields fields-btn">
				<label for="exampleFormControlTextarea">Сообщение</label>
				<textarea name="message" id="exampleFormControlTextarea" placeholder="Введите ваше сообщение"
					rows="3"></textarea>
				<div style="color:#dc3545;"><?= $_SESSION['error_message'] ?></div>
				<br><button type="submit" class="btn-submit">Отправить</button>
				<div style="color:#198754;"><?= $_SESSION['success_mail'] ?></div>
			</div>
		</form>
	</div>
</section>
<?php
require_once "../blocks/footer.php"
	?>