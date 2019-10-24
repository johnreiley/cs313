<?php
require '../utilities/connect-db.php';
require '../utilities/db-queries.php';
$db = get_db();

$username = $_POST['username'];
$password = $_POST['password'];

$userInfo = verifyLoginCredentials($db, $username, $password);

$redirectUrl = "";

if ($userInfo != null) {
    session_start();
    $_SESSION['user_id'] = $userInfo['user_id'];
    $redirectUrl = "../index.php";
} else {
    $redirectUrl = "../admin-login.php";
}
header("Location: $redirectUrl");
?>
