<?php
include 'config.php';

$stmt = $pdo->query("SELECT hr.*, c.name as chicken_name FROM health_records hr JOIN chickens c ON hr.chicken_id = c.id ORDER BY date_of_treatment DESC");
$health_records = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Health Records</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Health Records</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Chicken Name</th>
                <th>Health Status</th>
                <th>Treatment</th>
                <th>Date of Treatment</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($health_records as $record): ?>
                <tr>
                    <td><?php echo $record['id']; ?></td>
                    <td><?php echo $record['chicken_name']; ?></td>
                    <td><?php echo $record['health_status']; ?></td>
                    <td><?php echo $record['treatment']; ?></td>
                    <td><?php echo $record['date_of_treatment']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
