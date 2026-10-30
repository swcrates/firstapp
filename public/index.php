<!DOCTYPE html>
<?php
require __DIR__ . '/../src/db.php';

if (isset($_GET['name']) && isset($_GET['message']))
{
    $stmt = db()->prepare('INSERT INTO messages (name, message) VALUES (?, ?)');
    $stmt->execute([$_GET['name'], $_GET['message']]);

    echo "Message \"" . $_GET['message'] . "\" submitted by " . $_GET['name'];
}
else
{
    echo "<h1>List of messages</h1>";

    $rows = db()->query('SELECT * FROM messages ORDER BY id DESC')->fetchAll();

    foreach ($rows as $row)
    {
        echo "<p>" . $row['name'] . " " . $row['message'];

            // htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8')
            // htmlspecialchars($row['body'], ENT_QUOTES, 'UTF-8')
    }
}
?>
