<?php
require '../utilities/connect-db.php';
require '../utilities/db-queries.php';
$db = get_db();
session_start();

$isAdmin = false;
if (isset($_SESSION['user_id'])) {
    $isAdmin = true;
}
?>