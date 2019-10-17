<?php
require 'utilities/db-queries.php';
require 'utilities/connect-db.php';
$db = get_db();

$id = $_GET['id'];

$post = getSinglePost($db, $id);
$title = $post['post_title'];
$date = $post['post_date'];
$author = "TODO";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require 'components/inject-head.php' ?>
    <title>Blog - <?php echo $title ?></title>
</head>

<body>
    <?php require 'components/navigation.php' ?>

    <main>
        <h2 class="post-title"><?php echo $title ?></h2>
        <div class="post-info"><?php echo "$date - $author"; ?></div>
        <div class="post-body"><?php echo $post['post_text'] ?></div>

        <!-- Add comments here -->
    </main>

    <?php require 'components/footer.php' ?>
    <a href="index.php">Home</a>

</body>

</html>