<?php
$shopItemsJSON = '[
    {
        "id": "001",
        "name": "Green Chair",
        "description": "A solid plastic green chair that does nothing but look great in your house.",
        "imgUrl": "https://atlas-content-cdn.pixelsquid.com/assets_v2/194/1943517897053705554/jpeg-600/G03.jpg",
        "price": "59.99"
    },
    {
        "id": "002",
        "name": "",
        "description": "",
        "imgUrl": "",
        "price": ""
    },
    {
        "id": "003",
        "name": "",
        "description": "",
        "imgUrl": "",
        "price": ""
    },
    {
        "id": "004",
        "name": "",
        "description": "",
        "imgUrl": "",
        "price": ""
    },
    {
        "id": "005",
        "name": "",
        "description": "",
        "imgUrl": "",
        "price": ""
    },
    {
        "id": "006",
        "name": "",
        "description": "",
        "imgUrl": "",
        "price": ""
    },
    {
        "id": "007",
        "name": "",
        "description": "",
        "imgUrl": "",
        "price": ""
    },
    {
        "id": "008",
        "name": "",
        "description": "",
        "imgUrl": "",
        "price": ""
    },
    {
        "id": "009",
        "name": "",
        "description": "",
        "imgUrl": "",
        "price": ""
    },
    {
        "id": "010",
        "name": "",
        "description": "",
        "imgUrl": "",
        "price": ""
    },
    {
        "id": "011",
        "name": "",
        "description": "",
        "imgUrl": "",
        "price": ""
    }
]';


$shopItemsDir = 'shop-items.json';

if (file_exists($shopItemsDir)) {
    echo "The file $filename exists";
} else {
    echo "The file ain't nowhere";
}

// $shopItemsFile = fopen(__DIR__ . $shopItemsDir, "r") or die("Unable to open file!");
// $shopItemsJson = fread($shopItemsFile, filesize($shopItemsDir));
// fclose($shopItemsFile);

$shopItems = json_decode($shopItemsJSON);

echo "<div class=\"card-show\">";
foreach($shopItems as $item) {
    echo "<div class=\"card\">
            <img class=\"card-img\" src=\"$item->imgUrl\" alt=\"\">
            <div class=\"card-txt\">
                $item->name
            </div>
        </div>";
}
echo "</div>"
?>
