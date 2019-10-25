<?php
require '../components/inject-requires-actions.php';
$redirectUrl = "../admin-login.php";

$username = $_POST['username'];
$password = $_POST['password'];

$userInfo = verifyLoginCredentials($db, $username, $password);

if ($userInfo != null) {
    session_start();
    $_SESSION['user_id'] = $userInfo['user_id'];
    $_SESSION['first_name'] = $userInfo['first_name'];
    $_SESSION['last_name'] = $userInfo['last_name'];
    $redirectUrl = "../index.php";
}
header("Location: $redirectUrl");
?>
