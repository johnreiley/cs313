<?php
session_start();
$cart = $_SESSION["cart"];
// do the magic stuff here!

foreach($cart as $item) {
    echo "$item->name<br>";
}

?>