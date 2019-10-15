<?php
require 'db-connect.php';
?>


Scripture Details: <?php 
$id = $_GET["id"];

echo($id);

$query = "SELECT book, chapter, verse, content FROM scriptures
WHERE scripture_id = $id";

foreach ($db->query($query) as $row) {
    $content = $row['content'];

    echo "<b>$book $chapter:$verse</b> - \"$content\"";
    echo "<br/>";
    echo "<br/>";
}

//echo "$book $chapter:$verse - $content";
?>