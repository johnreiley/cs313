<?php

function generateChildrenComments($db, $id)
{
    $comments = getSecondLevelComments($db, $id);
    if (sizeof($comments) > 0) {
        foreach ($comments as $comment) {
            $commentId = $comment['comment_id'];
            $sUser = $comment['first_name'] . " " . $comment['last_name'];
            $sDate = $comment['comment_time'];
            $sText = $comment['comment_text'];
            echo "
        <div class=\"comment\">
            <div class=\"comment-details\">$sUser - $sDate</div>
            <div class=\"comment-body\">$sText</div>
        </div>";
        generateChildrenComments($db, $commentId);
        }
    } else {
        return;
    }
}

?>
