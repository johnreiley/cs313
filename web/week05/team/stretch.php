<?php
session_start();

try {
    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);

    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"], '/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $_SESSION['db'] = $db;
    
} catch (PDOException $ex) {
    echo 'Error!: ' . $ex->getMessage();
    die();
}

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
<form action="results.php" method="post">
    Please enter a book you would like to search for: <br />
    <input type="text" name="book_name" id="book_name">
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