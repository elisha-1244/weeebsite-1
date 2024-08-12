<?php
include 'config.php';

$stmt = $pdo->query("SELECT ep.*, c.name as chicken_name FROM egg_production ep JOIN chickens c ON ep.chicken_id = c.id ORDER BY date_produced DESC");
$egg_productions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Egg Production</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Egg Production Records</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Chicken Name</th>
                <th>Eggs Produced</th>
                <th>Date Produced</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($egg_productions as $production): ?>
                <tr>
                    <td><?php echo $production['id']; ?></td>
                    <td><?php echo $production['chicken_name']; ?></td>
                    <td><?php echo $production['eggs_produced']; ?></td>
                    <td><?php echo $production['date_produced']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
