<?php
require 'db-connect.php';

$book = $_POST["book"];

$query = "SELECT chapter, verse FROM scriptures WHERE book='$book'";
foreach ($db->query($query) as $row) {
    $chapter = $row['chapter'];
    $verse = $row['verse'];
    
    echo "<a href=\"scriptureDetails.php?book=$book&chapter=$chapter&verse=$verse\">$book $chapter:$verse</a>";
}

?>

