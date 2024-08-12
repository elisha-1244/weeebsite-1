<?php
include 'config.php';

$stmt = $pdo->query("SELECT * FROM chickens ORDER BY date_added DESC");
$chickens = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Chickens</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>List of Chickens</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Breed</th>
                <th>Age</th>
                <th>Health Status</th>
                <th>Date Added</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chickens as $chicken): ?>
                <tr>
                    <td><?php echo $chicken['id']; ?></td>
                    <td><?php echo $chicken['name']; ?></td>
                    <td><?php echo $chicken['breed']; ?></td>
                    <td><?php echo $chicken['age']; ?></td>
                    <td><?php echo $chicken['health_status']; ?></td>
                    <td><?php echo $chicken['date_added']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
