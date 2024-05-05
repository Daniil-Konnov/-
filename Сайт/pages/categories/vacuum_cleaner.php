<?php
$connect = mysqli_connect("localhost","root","root","hardwarestore");
if(!$connect) {
    echo 'Error connect to DataBase';
}
$result = mysqli_query($connect,"SELECT * FROM `vacuum cleaner`");
$products = mysqli_fetch_all($result);
foreach ($products as $product) {
    echo
    '<div class="card">
		<img src="' . $product[1] . '" class="card-img">
		<div class="card-text">
			<h5>' . $product[2] . '</h5>
			<p>' . $product[3] . '</p>
		</div>
		<div class="card-btn">
			<p>' . $product[4] . ",0 BYN" . '</p>
			<a href="?V&id=' . $product[0] . '">В корзину</a>
		</div>
	</div>';
}