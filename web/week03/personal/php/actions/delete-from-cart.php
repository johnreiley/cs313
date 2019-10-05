<?php
session_start();
$filepath = 'https://calm-bastion-61884.herokuapp.com/week03/personal/php/cart-view.php';
header("Location: $filepath");

$id = $_REQUEST["id"];
$cartItems = $_SESSION["cart"];
$cartItems = array_filter($cartItems, function($cartItem) use($id) { return $cartItem->id != $id; });

$_SESSION["cart"] = [];
foreach ($cartItems as $itemToAdd) {
    array_push($_SESSION["cart"], $itemToAdd);
}
?>