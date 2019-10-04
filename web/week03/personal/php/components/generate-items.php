<?php

$shopItemsDir = __DIR__ . '/../../data/shop-items.json';

$shopItemsFile = fopen($shopItemsDir, "r") or die("Unable to open file!");
$shopItemsJson = fread($shopItemsFile, filesize($shopItemsDir));
fclose($shopItemsFile);

$shopItems = json_decode($shopItemsJson);

echo "<div class=\"card-show\">";
foreach($shopItems as $item) {
    echo "<div class=\"card\">
            <img class=\"card-img\" src=\"$item->imgUrl\" alt=\"\">
            <div class=\"card-txt\">
                <div>$item->name</div>
                <div class=\"card-txt-desc\">$item->description</div>
                <div>$item->price</div>
            </div>
        </div>";
}
echo "</div>";

?>