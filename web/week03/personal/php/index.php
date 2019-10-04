<?php
$thisPage = "Home"
?>

<?php 
include("components/session.php");
$thisPage = "Home";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Shop - <?php echo $thisPage ?></title>
</head>

<body>
    <?php include("components/navigation.php"); ?>

    <div class="content-container">
        <?php include("components/generate-items.php"); ?>
    </div>

    <?php include("components/footer.php"); ?>
</body>

</html>