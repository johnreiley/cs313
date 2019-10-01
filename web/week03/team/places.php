<?php
$placeMap = array(
    "na" => "North America",
    "sa" => "South America",
    "eu" => "Europe",
    "as" => "Asia",
    "at" => "Australia",
    "af" => "Africa",
    "aq" => "Antarctica"
);
foreach ($_POST['places'] as $place) {
    echo "<li> $placeMap[$place] </li>";
}
