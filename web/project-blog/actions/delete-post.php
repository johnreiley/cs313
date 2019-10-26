<?php
require '../components/inject-requires.php';

$id = $_POST['post-delete-id'];

if ($isAdmin) {
    deleteBlogPost($db, $id);
}
header('Location: ../index.php');

?>