<?php
session_start();
unset($_SESSION['user']);
$_SESSION['enter'] = false;
header('Location: ../index.php');