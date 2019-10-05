<?php
session_start();
$cart = $_SESSION["cart"];

$totalPrice = 0;
foreach($cart as $item) {
    $totalPrice += $item->price;
    echo "<tr>
            <td>$item->name</td>
            <td>$$item->price</td>
        </tr>";
}
echo "<tr>
        <td>+</td>
        <td></td>
    </tr>
    <tr>
        <td>Total:</td>
        <td>$$totalPrice</td>
    </tr>";

?>