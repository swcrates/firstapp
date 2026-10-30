<?php

echo "Hello SWE 432 class!!!!!!!";
echo "<br>DB enabled<br>Oct 29";

require __DIR__ . '/../src/db.php';
$name = $_GET['name'] ?? "no name";
$body = $_GET['body'] ?? "no body";
$stmt = db()->prepare('INSERT INTO messages (name, body) VALUES (?, ?)');
$stmt->execute([$name, $body]);
$rows = db()->query('SELECT * FROM messages ORDER BY id DESC')->fetchAll();

foreach ($rows as $row)
{
    echo "<p>" . $row['name'] . " " . $row['body'];

        // htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8')
        // htmlspecialchars($row['body'], ENT_QUOTES, 'UTF-8')
}
?>
