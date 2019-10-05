<?php
include("components/session.php");
$thisPage = "Cart Checkout"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Shop - <?php echo $thisPage ?></title>
    <script src="../js/fancy-form.js" defer></script>
</head>

<body>
    <?php include("components/navigation.php"); ?>

    <form class="fancy-form">
        <div class="fancy-input">
            <input type="text">
            <div class="fancy-input-txt">first name</div>
        </div>
        <div class="break"></div>
        <div class="fancy-input">
            <input type="text">
            <div class="fancy-input-txt">last name</div>
        </div>
        <div class="break"></div>
        <div class="fancy-input">
            <input type="text">
            <div class="fancy-input-txt">address</div>
        </div>        <div class="break"></div>
        <div class="fancy-input">
            <input type="text">
            <div class="fancy-input-txt">address 2</div>
        </div>
        <div class="break"></div>
        <div class="fancy-input">
            <input type="text">
            <div class="fancy-input-txt">city</div>
        </div>
        <div class="break"></div>
        <div class="fancy-input">
            <input type="text">
            <div class="fancy-input-txt">state</div>
        </div>
        <div class="break"></div>
        <div class="fancy-input">
            <input type="text">
            <div class="fancy-input-txt">zip code</div>
        </div>

        <div class="break"></div>
        <div class="fancy-input">
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <div class="fancy-input-txt">comments</div>
        </div>

    </form>


    <?php include("components/footer.php"); ?>
</body>

</html>