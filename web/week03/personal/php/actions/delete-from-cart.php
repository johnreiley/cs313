<?php
session_start();
$filepath = 'https://calm-bastion-61884.herokuapp.com/week03/personal/php/cart-view.php';
header("Location: $filepath");

$id = $_REQUEST["id"];
$cartItems = $_SESSION["cart"];

$_SESSION["cart"] = array_filter($cartItems, function($cartItem) use($id) { return $cartItem->id != $id });
?>