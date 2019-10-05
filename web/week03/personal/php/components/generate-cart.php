<?php
session_start();
$cart = $_SESSION["cart"];
// do the magic stuff here!

if (count($cart) > 0) {
    echo "<div class=\"checkout-btn\"><a>Checkout</a></div>";
}

foreach($cart as $item) {
    echo "<tr class=\"cart-item\">
            <td class=\"cart-item-img\"><img src=\"$item->imgUrl\"></td>
            <td class=\"cart-item-name\">$item->name</td>
            <td class=\"cart-item-price\">$item->price</td>
            <td class=\"remove-item-btn fancy-btn\"><a href=\"actions/delete-from-cart.php?id=$item->id\">Remove</a></td>
        </tr>";
}

?>