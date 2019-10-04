<?php
session_start();
$filepath = 'https://calm-bastion-61884.herokuapp.com/week03/personal/php/index.php';
header("Location: $filepath");

$id = $_REQUEST["id"];
echo($id . "<br>"); ///////////////////////////
$shopItems = getShopInventory();
$itemToAdd = array_filter($shopItems, function($shopItem) use($id) { return $shopItem->id == $id; });
print_r($itemToAdd);

array_push($_SESSION["cart"], $itemToAdd);




function getShopInventory() {
    $shopItemsDir = __DIR__ . '/../../data/shop-items.json';

    $shopItemsFile = fopen($shopItemsDir, "r") or die("Unable to open file!");
    $shopItemsJson = fread($shopItemsFile, filesize($shopItemsDir));
    fclose($shopItemsFile);
    
    $shopItems = json_decode($shopItemsJson);
    return $shopItems;
}
?>