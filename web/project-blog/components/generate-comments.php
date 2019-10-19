<?php

function generateChildrenComments($db, $id)
{
    foreach (getSecondLevelComments($db, $commentId) as $comment) {
        $commentId = $comment['comment_id'];
        $user = $comment['first_name'] . " " . $comment['last_name'];
        $date = $comment['comment_time'];
        $text = $comment['comment_text'];
        echo "
        <div id=\"comment-$commentId\" class=\"comment\">
            <div class=\"comment-details\">$user - $date</div>
            <div class=\"comment-body\">$text</div>
        </div>";
        // generateChildrenComments($db, $commentId);
    }
}
