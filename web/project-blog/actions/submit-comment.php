<?php
require '../utilities/db-queries.php';
require '../utilities/connect-db.php';
$db = get_db();

$id = $_GET['id'];
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$comment = htmlspecialchars($_POST['comment']);

postNewComment($db, $id, $name, $email, $comment);

header("Location: ../post.php?id=$id");
?>