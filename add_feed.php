<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $feed_type = $_POST['feed_type'];
    $quantity = $_POST['quantity'];

    $stmt = $pdo->prepare("INSERT INTO feed (feed_type, quantity, date_provided) VALUES (?, ?, NOW())");
    $stmt->execute([$feed_type, $quantity]);

    echo "Feed information added successfully!";
}
?>
