<?php
session_start();
$title = "Каталог товаров";
require_once "../blocks/header.php";
require_once "../php/connect.php";
?>
<section class="backgrounds">
	<div class="catalog">
		<div class="catalog-head">
			<h1>Каталог товаров</h1>
		</div>
		<div class="catalog-body">
			<div class="menu">
				<div class="basket">
					<button type="button" class="open-basket-popup">Корзина</button>
				</div>
				<div class="menu-list">
					<div class="list-card">
						<ul>
							<a href="?S">Смартфоны и планшеты</a>
							<a href="?L">Ноутбуки и компьютеры</a>
							<a href="?T">Телевизоры</a>
							<a href="?R">Холодильники</a>
							<a href="?W">Стиральные машины</a>
							<a href="?V">Пылесосы</a>
							<a href="?M">Микроволновые печи</a>
						</ul>
					</div>
				</div>
			</div>
			<div class="items">
				<?php
				if (isset($_GET['S'])) {
					require_once "categories/smartphones_and_tablets.php";
				} elseif (isset($_GET['L'])) {
					require_once "categories/laptops_and_computers.php";
				} elseif (isset($_GET['T'])) {
					require_once "categories/televisors.php";
				} elseif (isset($_GET['R'])) {
					require_once "categories/refrigerators_and_freezers.php";
				} elseif (isset($_GET['W'])) {
					require_once "categories/washing_machines.php";
				} elseif (isset($_GET['V'])) {
					require_once "categories/vacuum_cleaner.php";
				} elseif (isset($_GET['M'])) {
					require_once "categories/microwaves.php";
				}
				?>
			</div>
		</div>
	</div>
	<div class="popup-basket-bg">
		<div class="popup-basket">
			<div class="popup-header">
				<h5>Корзина</h5>
				<button type="button" class="btn-close close-basket-popup" data-bs-dismiss="modal"
					aria-label="Close"></button>
			</div>
			<div class="popup-body">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Image</th>
							<th scope="col">Title</th>
							<th scope="col">Price</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if (isset($_GET['reset'])) {
							$_SESSION['products_basket'] = array();
							$_SESSION['products_col'] = 0;
							$_SESSION['products_price'] = 0;
						}
						if (isset($_GET['id'])) {
							require_once '../php/basket.php';
						}
						?>
						<?php foreach ($_SESSION['products_basket'] as $product_basket): ?>
							<tr>
								<td><img src="<?= $product_basket['photo'] ?>"></td>
								<td><?= $product_basket['title'] ?></td>
								<td text-danger><?= $product_basket['price'] ?></td>
							</tr>
						<?php endforeach ?>
						<tr>
							<td colspan="4" align="right">Товаров: <?= $_SESSION['products_col'] ?> <br> Сумма:
								<?= $_SESSION['products_price'] . ",0 BYN" ?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="popup-footer">
				<a class="btn-reset" href="?reset">Очистить корзину</a>
				<?php if ($_SESSION['enter']): ?>
					<a style="margin-left:10px" class="btn-form" href="/pages/personal_area.php">Оформить заказ</a>
				<?php endif ?>
			</div>
		</div>
	</div>
</section>
<?php
require_once "../blocks/footer.php"
	?>