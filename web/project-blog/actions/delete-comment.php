<?php
require '../components/inject-requires-actions.php';

if ($isAdmin) {
    $commentId = $_GET['comment-id'];
    if (isset($_GET['is-sub-comment'])) {
        deleteSecondaryComment($db, $commentId);
     } else {
        deleteComment($db, $commentId);
    }
}
$postId = $_GET['post-id'];
header("Location: ../post.php?id=$postId");
