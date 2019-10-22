<?php
    require 'db-connect.php';

    $book = $_POST["book"];
    $chapter = $_POST["chapter"];
    $verse = $_POST["verse"];
    $content = $_POST["content"];

    $sql = "INSERT INTO scripture(book, chapter, verse, content)
    VALUES ('John', 'Doe', 'john@example.com')";

    $query = "INSERT INTO scripture(book, chapter, verse, content) VALUES($book, $chapter, $verse, $content)";
    $statement = $db->prepare($query);

$s = "INSERT INTO scriptures( book, chapter, verse, content)
VALUES ( 'Hebrews', 11, 4,
'By faith Abel offered unto God a more excellent sacrifice than Cain, by which he obtained witness that he was righteous, God testifying of his gifts: and by it he being dead yet speaketh.'
)";

$s = "INSERT INTO scriptures( book, chapter, verse, content)
VALUES ( '1 Corinthians', 13, 13,
'And now abideth faith, hope, charity, these three; but the greatest of these is charity.'
)";

$s = "INSERT INTO scriptures( book, chapter, verse, content)
VALUES ( 'Moroni', 7, 47,
'But charity is the pure love of Christ, and it endureth forever; and whoso is found possessed of it at the last day, it shall be well with him.'
)";
?>