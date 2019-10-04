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

    <div class="img-header">
        <img src="https://images.squarespace-cdn.com/content/v1/50631261e4b0e9530e2c53a7/1450885912393-ELETG8RHSDRZCGZMIQZ3/ke17ZwdGBToddI8pDm48kFWxnDtCdRm2WA9rXcwtIYR7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UcTSrQkGwCGRqSxozz07hWZrYGYYH8sg4qn8Lpf9k1pYMHPsat2_S1jaQY3SwdyaXg/Montana-Strip-Cropping-Photo.jpg" alt="">
        <div class="img-text">
            Furniture Farm
        </div>
    </div>
    <div class="content-container">
        <?php include("components/generate-items.php"); ?>
    </div>

    <?php include("components/footer.php"); ?>
</body>

</html>