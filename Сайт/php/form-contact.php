<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['message']);
unset($_SESSION['subject']);
unset($_SESSION['error_email']);
unset($_SESSION['error_message']);
unset($_SESSION['success_mail']);
function redirect() {
    header('Location: /pages/feedback.php');
    exit;
}
$to = "admin@line.com";
$email = htmlspecialchars(urldecode(trim($_POST['email'])));
$message = htmlspecialchars(urldecode(trim($_POST['message'])));
$subject = htmlspecialchars(urldecode(trim($_POST['subject'])));
$_SESSION['email'] = $email;
$_SESSION['message'] = $message;
$_SESSION['subject'] = $subject;
if(strlen($email) <= 5 || strpos($email,'@') == false) {
    $_SESSION['error_email'] = "Вы ввели некорректный email";
    redirect();
} elseif(strlen($message) <= 15) {
    $_SESSION['error_message'] = "Вы ввели некорректное сообщение";
    redirect();
}else {
    $_SESSION['success_mail'] = "Сообщение успешно отправлено";
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-type: text/plain; charset=utf-8\r\n";
    mail($to,$message,$subject,$headers);
    redirect();
}