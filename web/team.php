<?php
$thisPage = "Team Assignments";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>John - <?php echo $thisPage ?></title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php include("navigation.php"); ?>

    <div class="img-header">
        <img src="resources/river.jpg" alt="">
        <div class="img-text">
            <?php echo $thisPage ?>
        </div>
    </div>
    <div class="content-container">
        <ul class="assignments">
            <li><a href="week01/team/">Week 1</a></li>
            <li><a href="week02/team/">Week 2</a></li>
            <li><a href="week03/team/">Week 3</a></li>
            <li><a href="week04/team/">Week 4</a></li>
            <li><a href="week05/team/">Week 5</a></li>
            <li><a href="week06/team/">Week 6</a></li>
            <li><a href="week07/team/">Week 7</a></li>
            <li><a href="week08/team/">Week 8</a></li>
            <li><a href="week09/team/">Week 9</a></li>
            <li><a href="week10/team/">Week 10</a></li>
            <li><a href="week11/team/">Week 11</a></li>
            <li><a href="week12/team/">Week 12</a></li>
            <li><a href="week13/team/">Week 13</a></li>
            <li><a href="week14/team/">Week 14</a></li>
        </ul>
    </div>

    <hr>
</body>
<script src="index.js"></script>

</html>