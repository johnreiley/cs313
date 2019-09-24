<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>PHP Team Activity</h1>
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <div id="<?php $i ?>" 
            <?php if ($i % 2 == 0) {
                    echo "style='color: red'";
                  } ?>>
            This is div #<?php echo $i; ?>
        </div>
    <?php } ?>

    <?php
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 0) {
            echo "<div style='color: red; width: 100%; border: 1px solid black'>$i</div>";
        } else echo "<div style='color: blue'>$i</div>";
    }
    ?>

</body>

</html>