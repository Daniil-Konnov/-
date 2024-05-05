<?php
session_start();
require_once 'connect.php';
if (isset($_GET['S'])) {
    $table = "smartphones and tablets";
    $id = $_GET['id'];
} elseif (isset($_GET['L'])) {
    $table = "laptops and computers";
    $id = $_GET['id'];
} elseif (isset($_GET['T'])) {
    $table = "televisors";
    $id = $_GET['id'];
} elseif (isset($_GET['R'])) {
    $table = "refrigerators and freezers";
    $id = $_GET['id'];
} elseif (isset($_GET['W'])) {
    $table = "whashing mashines";
    $id = $_GET['id'];
} elseif (isset($_GET['V'])) {
    $table = "vacuum cleaner";
    $id = $_GET['id'];
} elseif (isset($_GET['M'])) {
    $table = "microwaves";
    $id = $_GET['id'];
}
$result = mysqli_query($connect,"SELECT `photo`, `title`, `price` FROM `$table` WHERE `id` = '$id'");
$product = mysqli_fetch_assoc($result);
array_unshift($_SESSION['products_basket'],$product);
$_SESSION['products_col'] += 1;
$_SESSION['products_price'] += $product['price'];