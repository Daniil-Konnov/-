<?php
$connect = mysqli_connect("localhost","root","root","hardwarestore");
if(!$connect) {
    echo 'Error connect to DataBase';
}