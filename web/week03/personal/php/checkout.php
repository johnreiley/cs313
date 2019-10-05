<?php
include("components/session.php");
$thisPage = "Checkout"
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
    <script src="../js/fancy-form.js" defer></script>
</head>

<body>
    <?php include("components/navigation.php"); ?>

    <div class="img-header">
        <img src="https://i.redd.it/liu352h66pjx.jpg" alt="">
        <div class="img-text">
            <?php echo $thisPage ?>
        </div>
    </div>

    <div class="content-container">
        <form class="fancy-form">

            <div class="primary-btn left"><a href="cart-view.php">Return to Cart</a></div>
            <div class="break"></div>

            <h2 class="fancy-title">Shipping Address</h2>
            <div class="break"></div>
            <div class="fancy-input">
                <input type="text">
                <div class="fancy-input-txt">first name</div>
            </div>
            <div class="fancy-input">
                <input type="text">
                <div class="fancy-input-txt">last name</div>
            </div>
            <div class="break"></div>
            <div class="fancy-input">
                <input type="text">
                <div class="fancy-input-txt">address</div>
            </div>
            <div class="break"></div>
            <div class="fancy-input">
                <input type="text">
                <div class="fancy-input-txt">address 2</div>
            </div>
            <div class="break"></div>
            <div class="fancy-input">
                <input type="text">
                <div class="fancy-input-txt">city</div>
            </div>
            <div class="fancy-input">
                <input list="statelist">
                <div class="fancy-input-txt">state</div>
                <datalist id="statelist">
                    <option value="Alabama"></option>
                    <option value="Alaska"></option>
                    <option value="Arizona"></option>
                    <option value="Arkansas"></option>
                    <option value="California"></option>
                    <option value="Colorado"></option>
                    <option value="Connecticut"></option>
                    <option value="Delaware"></option>
                    <option value="District of Columbia"></option>
                    <option value="Florida"></option>
                    <option value="Georgia"></option>
                    <option value="Hawaii"></option>
                    <option value="Idaho"></option>
                    <option value="Illinois"></option>
                    <option value="Indiana"></option>
                    <option value="Iowa"></option>
                    <option value="Kansas"></option>
                    <option value="Kentucky"></option>
                    <option value="Louisiana"></option>
                    <option value="Maine"></option>
                    <option value="Maryland"></option>
                    <option value="Massachusetts"></option>
                    <option value="Michigan"></option>
                    <option value="Minnesota"></option>
                    <option value="Mississippi"></option>
                    <option value="Missouri"></option>
                    <option value="Montana"></option>
                    <option value="Nebraska"></option>
                    <option value="Nevada"></option>
                    <option value="New Hampshire"></option>
                    <option value="New Jersey"></option>
                    <option value="New Mexico"></option>
                    <option value="New York"></option>
                    <option value="North Carolina"></option>
                    <option value="North Dakota"></option>
                    <option value="Ohio"></option>
                    <option value="Oklahoma"></option>
                    <option value="Oregon"></option>
                    <option value="Pennsylvania"></option>
                    <option value="Rhode Island"></option>
                    <option value="South Carolina"></option>
                    <option value="South Dakota"></option>
                    <option value="Tennessee"></option>
                    <option value="Texas"></option>
                    <option value="Utah"></option>
                    <option value="Vermont"></option>
                    <option value="Virginia"></option>
                    <option value="Washington"></option>
                    <option value="West Virginia"></option>
                    <option value="Wisconsin"></option>
                    <option value="Wyoming"></option>
                </datalist>
            </div>
            <div class="fancy-input">
                <input type="text">
                <div class="fancy-input-txt">zip code</div>
            </div>
            <div class="break"></div>
            <h2 class="fancy-title">Order Summary</h2>
            <div class="break"></div>
            <div class="order-summary">
                <table>
                    <?php include("actions/generate-order-summary.php"); ?>
                </table>
            </div>
            <div class="break"></div>
            <div class="primary-btn"><button type="submit">Confirm Order</button></div>
        </form>

        <?php include("components/footer.php"); ?>
    </div>
</body>

</html>