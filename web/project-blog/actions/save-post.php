<?php

$title = $_POST['title'];
$img = $_POST['img-url'];
$text = $_POST['body-text'];

if (isset($_POST['id'])) {
    updateBlogPost($db, $_POST['id'], $title, $img, $text);
} else {
    postNewBlogPost($db, $title, $img, $text);
}

?>