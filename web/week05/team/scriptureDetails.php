<?php
session_start();
$db = $_SESSION['db'];
?>

Scripture Details: <?php 
$book = $_GET["book"];
$chapter = $_GET["chapter"];
$verse = $_GET["verse"];

$query = 'SELECT '

?>