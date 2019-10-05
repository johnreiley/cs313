<?php
session_start();
$cart = $_SESSION["cart"];

$totalPrice = 0;
foreach($cart as $item) {
    $totalPrice += $item->price;
    echo "<tr>
            <td>$item->name</td>
            <td class=\"order-item-price\">$$item->price</td>
        </tr>";
}
echo "<tr class=\"order-add-line\">
        <td class=\"order-plus-sign\">+</td>
        <td></td>
    </tr>
    <tr>
        <td>Total:</td>
        <td>$$totalPrice</td>
    </tr>";

?>