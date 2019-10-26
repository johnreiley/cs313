<?php
require '../components/inject-requires-actions.php';

if ($isAdmin) {
    $commentId = $_GET['comment-id'];
    deleteComment($db, $commentId);
}
$postId = $_GET['post-id'];
header("Location: ../post.php?id=$postId");
?>