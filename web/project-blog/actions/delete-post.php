<?php
require '../components/inject-requires-actions.php';

$id = $_POST['post-delete-id'];

if ($isAdmin) {
    deleteBlogPost($db, $id);
}
// header('Location: ../index.php');

?>