<?php
require 'db-connect.php';
$db = get_db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scriptures</title>
</head>
<body>

<h1>Scripture Resources</h1>
Please enter a book you would like to search for: <br />
<form action="results.php" method="post">
    <input type="text" name="book" id="book" placeholder="Book">
    >><input type="submit" value="Submit"><<
</form>

<?php
foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures;') as $row) {
    $book = $row['book'];
    $chapter = $row['chapter'];
    $verse = $row['verse'];
    $content = $row['content'];

    echo "<b>$book $chapter:$verse</b> - \"$content\"";
    echo "<br/>";
    echo "<br/>";
}

?>

</body>
</html>