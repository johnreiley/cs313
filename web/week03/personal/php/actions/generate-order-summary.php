<?php
session_start();
$cart = $_SESSION["cart"];

$totalPrice = 0;
foreach($cart as $item) {
    $totalPrice += $item->price;
}

?>