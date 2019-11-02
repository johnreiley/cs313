<?php
require 'components/inject-requires.php';
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
                Welcome to my blog where you will find many articles that do not make much sense.  Some day there will meaningful information on here.  But for the time being, please enjoy being confused.
            </div>
        </div>
    </main>

    <?php require 'components/footer.php' ?>

</body>

</html>