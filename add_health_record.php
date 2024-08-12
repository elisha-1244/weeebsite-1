<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $chicken_id = $_POST['chicken_id'];
    $health_status = $_POST['health_status'];
    $treatment = $_POST['treatment'];

    $stmt = $pdo->prepare("INSERT INTO health_records (chicken_id, health_status, treatment, date_of_treatment) VALUES (?, ?, ?, NOW())");
    $stmt->execute([$chicken_id, $health_status, $treatment]);

    echo "Health record added successfully!";
}
?>
