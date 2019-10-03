<?php
$shopItemsDir = "../../data/shop-items.txt";
$shopItemsFile = fopen($shopItemsDir, "r") or die("Unable to open file!");
$shopItemsJson = fread($shopItemsFile, filesize($shopItemsDir));
fclose($shopItemsFile);

$shopItems = json_decode($shopItemsJson, true);
print_r($shopItemsJson);
?>
