<?php
require '../components/inject-requires-actions.php';

$id = $_GET['id'];
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$comment = htmlspecialchars($_POST['comment']);

postNewComment($db, $id, $name, $email, $comment);

header("Location: ../post.php?id=$id");
?>