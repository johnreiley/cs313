<?php
require 'db-connect.php';

$book = $_POST["book"];

$query = "SELECT scripture_id FROM scriptures WHERE book='$book'";
foreach ($db->query($query) as $row) {
    $id = $row['scripture_id'];
    
    echo "<a href=\"scriptureDetails.php?id=$id\">$book $chapter:$verse</a>";
}

?>

