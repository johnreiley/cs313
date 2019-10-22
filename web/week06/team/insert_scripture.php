<?php
$filepath = 'https://calm-bastion-61884.herokuapp.com/week06/team/team.php';
require 'db-connect.php';
try {

    $book = $_POST["book"];
    $chapter = (int) ($_POST["chapter"]);
    $verse = (int) ($_POST["verse"]);
    $content = $_POST["content"];

    $sql = "INSERT INTO scriptures (book, chapter, verse, content) VALUES ('$book', $chapter, $verse, '$content');";


    if ($db->query($sql) == TRUE) {
        echo "New scripture created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

    $scriptureId = $db->lastInsertId();

    foreach ($db->query('SELECT topic_id, topic_name FROM topic;') as $row) {
        $topic_id = $row['topic_id'];
        $topic_name = $row['topic_name'];

        if ($_POST[$topic_name]) {
            $sql = "INSERT INTO link (topic_id, scripture_id) VALUES ($topic_id, $scriptureId);";
            $db->query($sql);
        }
    }


    // echo "Topic tags:";
    // echo "<ul>";
    // foreach ($db->query("SELECT topic_name FROM topic;") as $row) {
    //     $topic_name = $row['topic_name'];
    //     if (isset($_POST($topic_name))) {
    //         echo "<li>$topic_name</li>";
    //     }
    // }
    // echo "</ul>";

    header("Location: $filepath");
} catch (Exception $e) {
    echo $e->getMessage();
    die();
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
