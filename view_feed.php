<?php
include 'config.php';

$stmt = $pdo->query("SELECT * FROM feed ORDER BY date_provided DESC");
$feeds = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Feed</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Feed Records</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Feed Type</th>
                <th>Quantity (kg)</th>
                <th>Date Provided</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($feeds as $feed): ?>
                <tr>
                    <td><?php echo $feed['id']; ?></td>
                    <td><?php echo $feed['feed_type']; ?></td>
                    <td><?php echo $feed['quantity']; ?></td>
                    <td><?php echo $feed['date_provided']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
