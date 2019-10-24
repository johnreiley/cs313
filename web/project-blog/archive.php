<?php
require 'components/inject-requires.php';
$page = "Archive";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require 'components/inject-head.php' ?>
    <title>Blog - <?php echo $page ?></title>
</head>

<body>
    <?php require 'components/navigation.php' ?>


    <main>
        <div class="content-container">
            <h2 class="page-title"><?php echo $page ?></h2>
            <?php
            foreach (getAllPosts($db) as $post) {
                $id = $post['post_id'];
                $title = $post['post_title'];
                echo "<a href=post.php?id=$id>$title</a><br>";
            }
            ?>
        </div>
    </main>

    <?php require 'components/footer.php' ?>

</body>

</html>