<?php
require '../components/inject-requires.php';

$id = 0;
$title = "";
$img = "";
$text = "";

if (isset($_POST['post-edit-id'])) {
    $id = $_POST['post-edit-id'];
    echo $id;
    // $post = getSinglePost($db, $id);

    // $title = $post['post_title'];
    // $img = $post['post_img'];
    // $text = $post['post_text'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require '../components/inject-head.php' ?>
    <!-- <script src="../js/post-draft-previewer.js" defer></script> -->
    <title>Blog - Draft Post</title>
</head>

<body>
    <main>
        <div class="content-container">
            <form class="fancy-form" method="post" action="actions/save-post.php?id=<?php echo $id ?>">
                <div class="fancy-input">
                    <input type="text" id="title" name="title" required>
                    <div class="fancy-input-txt">title</div>
                </div>
                <div class="break"></div>
                <div class="fancy-input">
                    <input type="text" id="img-url" name="img-url" required>
                    <div class="fancy-input-txt">image url</div>
                </div>
                <div class="fancy-input">
                    <textarea name="body-text" id="body-text" cols="30" rows="10"></textarea>
                    <div class="fancy-input-txt">body text</div>
                </div>
                <div class="break"></div>
                <div class="fancy-btn">
                    <input type="submit" value="Save">
                </div>
            </form>

            <div class="draft-preview">
                <html>

                <body>
                    <h2 class="page-title"></h2>
                    <div class="post-info"></div>
                    <div class="post-img">
                        <img src="" alt="">
                    </div>
                    <div class="post-body"></div>
                </body>

                </html>
            </div>
        </div>
    </main>

</body>

</html>