<?php
echo "Hello SWE 432 class!!!!!!!";
echo "<br>DB enabled";

require __DIR__ . '/../src/db.php';

// Insert a message if name and body are provided
if (isset($_GET['name'], $_GET['body'])) {
    $stmt = db()->prepare(
        'INSERT INTO messages (name, body) VALUES (?, ?)'
    );
    $stmt->execute([$_GET['name'], $_GET['body']]);
}

// Retrieve all messages
$rows = db()->query(
    'SELECT * FROM messages ORDER BY id DESC'
)->fetchAll();
?>

<h2>Messages</h2>

<?php foreach ($rows as $row): ?>
    <p>
        <strong>
            <?= htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') ?>
        </strong>:
        <?= htmlspecialchars($row['body'], ENT_QUOTES, 'UTF-8') ?>
    </p>
<?php endforeach; ?>
