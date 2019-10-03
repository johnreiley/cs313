<?php
$shopItemsDir = "../../data/shop-items.json";

if (file_exists($shopItemsDir)) {
    echo "The file $filename exists";
} else {
    echo "The file ain't nowhere";
}

$shopItemsFile = fopen($shopItemsDir, "r") or die("Unable to open file!");
$shopItemsJson = fread($shopItemsFile, filesize($shopItemsDir));
fclose($shopItemsFile);

$shopItems = json_decode($shopItemsJson, true);
print_r($shopItemsJson);
?>
