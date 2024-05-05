<?php
session_start();
require_once 'connect.php';
function redirect() {
    header('Location: ../pages/personal_area.php');
    exit;
}
unset($_SESSION['error_login']);
unset($_SESSION['error_email']);
unset($_SESSION['error_phone']);
unset($_SESSION['error_addres']);
unset($_SESSION['error_password']);
unset($_SESSION['user_updated']);
$login = htmlspecialchars(urldecode(trim($_POST['login'])));
$email = htmlspecialchars(urldecode(trim($_POST['email'])));
$phone_number = htmlspecialchars(urldecode(trim($_POST['phone_number'])));
$addres = htmlspecialchars(urldecode(trim($_POST['addres'])));
$old_password = htmlspecialchars(urldecode(trim($_POST['old_password'])));
$new_password = htmlspecialchars(urldecode(trim($_POST['new_password'])));
if(strlen($login) > 15 || strlen($login) < 3) {
    $_SESSION['error_login'] = "Недопустимый логин";
    redirect();
}elseif(strlen($email) <= 5 || strpos($email,'@') == false) {
    $_SESSION['error_email'] = "Недопустимый email";
    redirect();
}elseif(strlen($phone_number) <= 8) {
    $_SESSION['error_phone'] = "Несоществующий мобильный телефон";
    redirect();
}elseif(strlen($addres) <= 10) {
    $_SESSION['error_addres'] = "Несоществующий адрес";
    redirect();
}elseif(strlen($new_password) < 4) {
    $_SESSION['error_password'] = "Недопустимый пароль";
    redirect();
}else {
    $login_query = $_SESSION['user']['login'];
    $password_query = md5($old_password);
    $password = md5($new_password);
    mysqli_query($connect,"UPDATE `user` SET `username` = '$login', `email` = '$email', `phone number` = '$phone_number', `addres` = '$addres', `password` = '$password'  WHERE `username` = '$login_query' AND `password` = '$password_query'");
    $_SESSION['user_updated'] = "Данные обновлены";
    $_SESSION['enter'] = true;
    header('Location: ../pages/personal_area.php');
}