<?php
require 'db-connect.php';

$book = $_POST["book"];

$query = "SELECT scripture_id, chapter, verse FROM scriptures WHERE book='$book'";
foreach ($db->query($query) as $row) {
    $id = $row['scripture_id'];
    $chapter = $row['chapter'];
    $verse = $row['verse'];
    
    echo "<a href=\"scriptureDetails.php?id=$id\">$book $chapter:$verse</a>";
}

?>

