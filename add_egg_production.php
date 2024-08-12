<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $chicken_id = $_POST['chicken_id'];
    $eggs_produced = $_POST['eggs_produced'];

    $stmt = $pdo->prepare("INSERT INTO egg_production (chicken_id, eggs_produced, date_produced) VALUES (?, ?, NOW())");
    $stmt->execute([$chicken_id, $eggs_produced]);

    echo "Egg production recorded successfully!";
}
?>
