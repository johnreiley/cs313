<?php
foreach (getPostComments($db, $id) as $comment) {
    $commentId = $comment['comment_id'];
    $name = $comment['comment_name'];
    $date = $comment['comment_time'];
    $date = formatDatabaseTimestampFull($date);
    $text = $comment['comment_text'];
    echo "<div id=\"comment-$commentId\" class=\"comment\">";
    if ($isAdmin) {
        echo "<div class=\"comment-delete-btn\">
                  <a href=\"actions/delete-comment.php?comment-id=$commentId&post-id=$id\">
                      <i class=\"material-icons\">remove_circle_outline</i>
                  </a>
              </div>";
    }
    echo "
              <div class=\"comment-details\">$name - $date</div>
              <div class=\"comment-body\">$text</div>
              <div class=\"comment-reply-btn\">
                  <button onclick=\"openCommentBlock($commentId)\">
                      <i class=\"material-icons\">reply</i>
                  </button>
              </div>
          </div>
          <div class=\"children\">";
    foreach (getSecondLevelComments($db, $commentId) as $comment) {
        $commentId = $comment['id'];
        $name = $comment['comment_name'];
        $date = $comment['comment_time'];
        $date = formatDatabaseTimestampFull($date);
        $text = $comment['comment_text'];
        echo "<div id=\"comment-$commentId\" class=\"comment\">";
        if ($isAdmin) {
            echo "<div class=\"comment-delete-btn\">
                      <a href=\"actions/delete-comment.php?comment-id=$commentId&post-id=$id\">
                          <i class=\"material-icons\">remove_circle_outline</i>
                      </a>
                  </div>";
        }
        echo "
                  <div class=\"comment-details\">$name - $date</div>
                  <div class=\"comment-body\">$text</div>
              </div>";
    }
    echo "</div>";
}
