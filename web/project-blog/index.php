<?php
require 'db-queries.php';
require 'connect-db.php';
$db = get_db();
$page = "Home";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog - <?php echo $page ?></title>
</head>

<body>
    <h1><?php echo $page ?></h1>

    <?php
    $query = 'SELECT post_date, post_title, post_text FROM posts';
    $stmt = $db->prepare($query);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        echo $row['post_date'];
    }
    // foreach (getAllPosts($db) as $post) {
    //     echo "<a>" . $post['post_title'] . "</a><br>";
    // }
    ?>

</body>

</html>