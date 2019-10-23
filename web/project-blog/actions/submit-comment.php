<?php
require '../utilities/db-queries.php';
require '../utilities/connect-db.php';
$db = get_db();

$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

postNewComment($db, $id, $name, $email, $comment);

// header("Location: post.php?id=$id");
?>