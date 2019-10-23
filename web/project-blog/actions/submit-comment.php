<?php
header("");
require 'utilities/db-queries.php';
require 'utilities/connect-db.php';
$db = get_db();

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

postNewComment($db, )

?>