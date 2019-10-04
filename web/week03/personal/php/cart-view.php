<?php
session_start();
include("components/session.php");
$thisPage = "Cart View"
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
    <div class="img-header">
        <img src="https://i.redd.it/liu352h66pjx.jpg" alt="">
        <div class="img-text">
            Cart
        </div>
    </div>

    <div class="content-container">
        <?php include("components/generate-cart.php"); ?>
        <?php include("components/footer.php"); ?>
    </div>

</body>

</html>