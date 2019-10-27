<?php
require '../components/inject-requires-actions.php';

$id = $_SESSION['post-id'];
// $id = $_GET['id'];
// $commentType = $_GET['type'];
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$comment = htmlspecialchars($_POST['comment']);

if (isset($_GET['comment-id'])) {
    $commentId = $_GET['comment-id'];
    //postNewSecondLevelComment($db, $commentId, $name, $email, $comment);
}
else {
    postNewComment($db, $id, $name, $email, $comment);
}

header("Location: ../post.php?id=$id");
