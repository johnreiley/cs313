<?php
session_start();
$filepath = 'https://calm-bastion-61884.herokuapp.com/week03/personal/php/index.php';
// header("Location: $filepath");

$id = $_REQUEST["id"];
echo($id); ///////////////////////////
$shopItems = getShopInventory();
print_r($shopItems);
// $itemToAdd = array_filter($shopItems, function($shopItem) use($id) { 
//     if ($shopItem->id == $id) {
//         echo "Found the one! $id";
//     }
//     return $shopItem->id === $id; });
$i = 0;
do {
    if ($shopItem[$i]->id == $id) {
        $itemToAdd = $shopItem[$i];
    }
} while ($i < count($shopItems) && $shopItem[$i++]->id != $id);
echo($itemToAdd);

// array_push($_SESSION["cart"], $itemToAdd[0]);





function getShopInventory() {
    $shopItemsDir = __DIR__ . '/../../data/shop-items.json';

    $shopItemsFile = fopen($shopItemsDir, "r") or die("Unable to open file!");
    $shopItemsJson = fread($shopItemsFile, filesize($shopItemsDir));
    fclose($shopItemsFile);
    
    $shopItems = json_decode($shopItemsJson);
    return $shopItems;
}
?>