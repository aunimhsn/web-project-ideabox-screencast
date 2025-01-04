<?php
include('./database/config.php');

$sql = 'select title from ideas';
$stmt = $pdo->query($sql);
$ideas = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PDO</title>
</head>
<body>
    <?php echo($ideas[0]['title']); ?>
</body>
</html>