<?php
session_start();
require_once 'connect.php';
function redirect() {
    header('Location: ../index.php');
    exit;
}
unset($_SESSION['error']);
unset($_SESSION['success_enter']);
$login = htmlspecialchars(urldecode(trim($_POST['login'])));
$password = md5(htmlspecialchars(urldecode(trim($_POST['password']))));
$result = mysqli_query($connect,"SELECT * FROM `user` WHERE `username` = '$login' AND `password` = '$password'");
if(mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "login" => $user['username'],
        "email" => $user['email'],
        "phone_number" => $user['phone number'],
        "addres" => $user['addres'],
        "password" => $user['password']
    ];
    $_SESSION['success_enter'] = "Вы успешно вошли";
    $_SESSION['enter'] = true;
    header('Location: ../pages/personal_area.php');
}else {
    $_SESSION['error'] = "Не верный логин или пароль";
    redirect();
}
mysqli_close($connect);