<?php
require 'utilities/db-queries.php';
require 'utilities/connect-db.php';
$db = get_db();
$page = "About";
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
            <div>
                Insert about info here
            </div>
        </div>
    </main>

    <?php require 'components/footer.php' ?>

</body>

</html>