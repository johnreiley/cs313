<?php
require 'db-queries.php';
require 'connect-db.php';
$db = get_db();

$id = $_GET['id'];
$post = getSinglePost($db, $id);
$title = $post['post_title'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog - <?php echo $title ?></title>
</head>

<body>
    <h1><?php echo $title ?></h1>

    <p><?php echo $post['post_text'] ?></p>

</body>

</html>