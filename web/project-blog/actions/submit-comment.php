<?php
// require_once 'utilities/db-queries.php';
// require_once 'utilities/connect-db.php';
// $db = get_db();

$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

echo "$id <br> $name <br> $email <br> $comment";

// postNewComment($db, $id, $name, $email, $comment);

// header("Location: post.php?id=$id");
?>