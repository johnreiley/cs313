<?php
require 'db-connect.php';

$book = $_POST["book"];

echo ("book = $book");
print_r($db);
// $query = "
// SELECT book, chapter, verse IN scriptures
// WHERE book = $book";
// $stmt = $db->prepare($query);
// $stmt->execute();
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($db->query("SELECT chapter, verse IN scriptures WHERE book = $book;") as $row) {
    $chapter = $row['chapter'];
    $verse = $row['verse'];
    
    echo "<a href=\"scriptureDetails.php?book=$book&chapter=$chapter&verse=$verse\">$book $chapter:$verse</a>Click Here for Details";
}

?>

