<?php
session_start();
require_once 'connect.php';
function redirect() {
    header('Location: ../index.php');
    exit;
}
unset($_SESSION['error_login']);
unset($_SESSION['error_email']);
unset($_SESSION['error_phone']);
unset($_SESSION['error_addres']);
unset($_SESSION['error_password']);
unset($_SESSION['success']);
$login = htmlspecialchars(urldecode(trim($_POST['login'])));
$email = htmlspecialchars(urldecode(trim($_POST['email'])));
$phone_number = htmlspecialchars(urldecode(trim($_POST['phone_number'])));
$addres = htmlspecialchars(urldecode(trim($_POST['addres'])));
$password1 = htmlspecialchars(urldecode(trim($_POST['password1'])));
$password2 = htmlspecialchars(urldecode(trim($_POST['password2'])));
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
}elseif(strlen($password1) < 4 || $password1 != $password2) {
    $_SESSION['error_password'] = "Недопустимый пароль";
    redirect();
}else {
    $password = md5($password1);
    mysqli_query($connect,"INSERT INTO `user` (`id`, `username`, `email`, `phone number`, `addres`, `password`) VALUES (NULL, '$login', '$email', '$phone_number', '$addres', '$password')");
    $_SESSION['success'] = "Регистрация прошла успешно";
    redirect();
}
mysqli_close($connect);