<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite color is " . $_SESSION["favanimal"] . ".";
print_r($_SESSION);
?>

</body>
</html>