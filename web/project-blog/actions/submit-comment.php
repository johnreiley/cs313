<?php
require '../components/inject-requires-actions.php';

$id = $_GET['id'];
$commentType = $_GET['type'];
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$comment = htmlspecialchars($_POST['comment']);

if ($commentType == 1) {
    postNewComment($db, $id, $name, $email, $comment);
}
else if ($commentType == 2) {
    //postNewSecondLevelComment($db, $id, $name, $email, $comment);
}

header("Location: ../post.php?id=$id");
?>