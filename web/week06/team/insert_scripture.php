<?php
    require 'db-connect.php';

    $book = $_POST["book"];
    $chapter = $_POST["chapter"];
    $verse = $_POST["verse"];
    $content = $_POST["content"];

    $sql = "INSERT INTO scripture(book, chapter, verse, content) VALUES($book, $chapter, $verse, $content)";

    if ($db->query($sql) === TRUE) {
        foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures;') as $row) {
            $book = $row['book'];
            $chapter = $row['chapter'];
            $verse = $row['verse'];
            $content = $row['content'];
        
            echo "<b>$book $chapter:$verse</b> - \"$content\"";
            echo "<br/>";
            echo "<br/>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // $s = "INSERT INTO scriptures( book, chapter, verse, content)
    // VALUES ( 'Hebrews', 11, 4,
    // 'By faith Abel offered unto God a more excellent sacrifice than Cain, by which he obtained witness that he was righteous, God testifying of his gifts: and by it he being dead yet speaketh.'
    // )";

    // $s = "INSERT INTO scriptures( book, chapter, verse, content)
    // VALUES ( '1 Corinthians', 13, 13,
    // 'And now abideth faith, hope, charity, these three; but the greatest of these is charity.'
    // )";

    // $s = "INSERT INTO scriptures( book, chapter, verse, content)
    // VALUES ( 'Moroni', 7, 47,
    // 'But charity is the pure love of Christ, and it endureth forever; and whoso is found possessed of it at the last day, it shall be well with him.'
    // )";
?>