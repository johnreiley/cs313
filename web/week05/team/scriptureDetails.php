<?php
require 'db-connect.php';
?>


Scripture Details: <?php 
$book = $_POST["book"];
$chapter = $_POST["chapter"];
$verse = $_POST["verse"];

$query = "SELECT book, chapter, verse, content FROM scriptures
WHERE book = '$book'
AND chapter = '$chapter'
AND verse = '$verse'";
$query->execute();

foreach ($db->query($query) as $row) {
    $content = $row['content'];

    echo "<b>$book $chapter:$verse</b> - \"$content\"";
    echo "<br/>";
    echo "<br/>";
}

//echo "$book $chapter:$verse - $content";
?>