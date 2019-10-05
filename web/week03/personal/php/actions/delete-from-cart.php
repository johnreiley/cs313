<?php
session_start();
$filepath = 'https://calm-bastion-61884.herokuapp.com/week03/personal/php/cart-view.php';
header("Location: $filepath");

$id = $_REQUEST["id"];



?>