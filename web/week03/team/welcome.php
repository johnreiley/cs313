<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<body>
    <div>Welcome <?php echo $_POST["firstname"]; ?></div> <br>
    <div>Your email address is: <?php echo $_POST["email"]; ?></div>
    <a href="mailto:<?php echo $_POST["email"]?>" target="_top">Send Mail to Self</a>
    
    <div> You are majoring in <?php echo $_POST["major"] ?> </div>
    <div>You said "<?php echo $_POST["comments"] ?>"</div>

    <div>
        <p>You have visited: 
    <?php
    $places_array = $_POST["places"];

    for($i = 0; $i < count($places_array); $i++) {
        echo $places_array[$i];
        echo ", ";
    }
    ?>
    </p>
    <a href=""></
</div>
</body>
</html>