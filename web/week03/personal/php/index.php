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
    <link rel="stylesheet" href="../styles/fancy-form.css">
    <title>Shop - <?php echo $thisPage ?></title>
</head>

<body>
    <?php include("components/navigation.php"); ?>

    <div class="img-header">
        <img src="https://i.redd.it/liu352h66pjx.jpg" alt="">
        <div class="img-text">
            Furniture Farm
        </div>
    </div>
    <div class="content-container">

        <?php
            $items = $_SESSION["cart"];
            foreach ($items as $item) { 
                echo "$item->name<br>";
            }
        ?>



        <?php include("components/generate-items.php"); ?>
        <?php include("components/footer.php"); ?>
    </div>

</body>

</html>