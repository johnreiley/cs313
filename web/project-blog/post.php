<?php
require 'components/inject-requires.php';

$id = $_GET['id'];

$post = getSinglePost($db, $id);
$title = $post['post_title'];
$date = $post['post_date'];
$date = formatDatabaseTimestampDate($date);
$img = $post['post_img'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require 'components/inject-head.php' ?>
    <script src="js/reply-handler.js" defer></script>
    <title>Blog - <?php echo $title ?></title>
</head>

<body>

    <?php require 'components/navigation.php' ?>

    <main>
        <div class="content-container">
            <?php
            if ($isAdmin) {
                echo "
                <div class=\"action-buttons\">
                    <form method=\"post\" action=\"\">
                        <button formaction=\"draft-post.php\" class=\"btn normal-btn\" type=\"submit\" name=\"post-edit-id\" value=\"$id\">
                        <i class=\"material-icons\">edit</i>
                        </button>
                        <button formaction=\"actions/delete-post.php\" class=\"btn warning-btn\" type=\"submit\" id=\"post-delete-btn\" name=\"post-delete-id\" value=\"$id\">
                        <i class=\"material-icons\">delete</i>
                        </button>
                    </form>
                </div>
                ";
            }
            ?>
            <div class="blog-post">
                <h2 class="page-title"><?php echo $title ?></h2>
                <div class="post-info"><?php echo $date ?></div>
                <div class="post-img"><img src="<?php echo $img ?>"></div>
                <div class="post-body"><?php echo $post['post_text'] ?></div>
            </div>
            <div class="comment-box">
                <form class="fancy-form" method="post" action="actions/submit-comment.php?id=<?php echo $id ?>&type=1">
                    <h2>Comments</h2>
                    <div class="break"></div>
                    <div class="fancy-input">
                        <input type="text" id="name" name="name" required>
                        <div class="fancy-input-txt">name</div>
                    </div>
                    <div class="fancy-input">
                        <input type="email" id="email" name="email" required>
                        <div class="fancy-input-txt">email</div>
                    </div>
                    <div class="fancy-input">
                        <textarea name="comment" id="comment" cols="30" rows="10" required></textarea>
                        <div class="fancy-input-txt">comments</div>
                    </div>
                    <div class="break"></div>
                    <div class="fancy-btn">
                        <input type="submit" value="Submit">
                    </div>
                </form>

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
                            <button href=\"#\">
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
                ?>
            </div>
        </div>
    </main>

    <?php require 'components/footer.php' ?>

</body>
<script>
    // create a popup dialog for deleting posts
</script>


</html>