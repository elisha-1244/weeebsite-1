<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $health_status = $_POST['health_status'];

    $stmt = $pdo->prepare("INSERT INTO chickens (name, breed, age, health_status, date_added) VALUES (?, ?, ?, ?, NOW())");
    $stmt->execute([$name, $breed, $age, $health_status]);

    echo "Chicken added successfully!";
}
?>
