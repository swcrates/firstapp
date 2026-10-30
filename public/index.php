<?php
echo "Hello SWE 432 class!!!!!!!";
echo "<br>DB enabled<br>Oct 29";

// require __DIR__ . '/../src/db.php';
require '../src/db.php';
echo "ok1<br>";
// $stmt = db()->prepare('INSERT INTO messages (name, body) VALUES (?, ?)');
echo "ok2<br>";
// $stmt->execute([$_POST['name'], $_POST['body']]);
echo "ok3<br>";
// $rows = db()->query('SELECT * FROM messages ORDER BY id DESC')->fetchAll();
echo "ok4<br>";

?>
