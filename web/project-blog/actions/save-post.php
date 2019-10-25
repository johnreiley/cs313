<?php
require '../components/inject-requires-actions.php';

$title = $_POST['title'];
$img = $_POST['img-url'];
$text = $_POST['body-text'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    updateBlogPost($db, $id, $title, $img, $text);
    header("Location: ../post.php?id=$id");
} else {
    postNewBlogPost($db, $title, $img, $text);
    header("Location: ../index.php");
}

?>