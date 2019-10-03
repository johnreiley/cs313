<?php
$thisPage = "Personal Assignments";
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
            <li><a href="week01/personal/hello.html">Week 1 - Hello World </a></li>
            <li><a href="index.php">Week 2 - Assignments Website</a></li>
            <li><a href="week03/personal/php/index.php">Week 3 - Shopping Site</a></li>
            <li><a href="week04/personal/">Week 4</a></li>
            <li><a href="week05/personal/">Week 5</a></li>
            <li><a href="week06/personal/">Week 6</a></li>
            <li><a href="week07/personal/">Week 7</a></li>
            <li><a href="week08/personal/">Week 8</a></li>
            <li><a href="week09/personal/">Week 9</a></li>
            <li><a href="week10/personal/">Week 10</a></li>
            <li><a href="week11/personal/">Week 11</a></li>
            <li><a href="week12/personal/">Week 12</a></li>
            <li><a href="week13/personal/">Week 13</a></li>
            <li><a href="week14/personal/">Week 14</a></li>
        </ul>
        <hr>
    </div>

</body>
<script src="index.js"></script>

</html>