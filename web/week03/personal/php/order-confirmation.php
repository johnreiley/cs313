<?php
include("components/session.php");
$thisPage = "Order Confirmation";

$fname = strip_tags($_POST["fname"]);
$lname = strip_tags($_POST["lname"]);
$a1 = strip_tags($_POST["address1"]);
$a2 = strip_tags($_POST["address2"]);
$city = strip_tags($_POST["city"]);
$state = strip_tags($_POST["state"]);
$zipcode = strip_tags($_POST["zipcode"]);

$cart = $_SESSION["cart"];
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

    <div class="content-container order-confirm-page">
        <div>You're order has been comfirmed and will be shipped to the following address in 25 days:</div><br>
        <div><?php echo "$fname $lname<br>$a1 $a2<br>$city, $state<br>$zipcode"; ?></div><br>
        <div><strong>Your Order:<strong></div>
        <div>
            <?php
            foreach ($cart as $item) {
                echo "<div>$item->name</div>";
            }
            session_unset();
            ?>
        </div>
    </div>

    <?php include("components/footer.php"); ?>
</body>

</html>