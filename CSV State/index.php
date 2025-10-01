<?php
require __DIR__ . '/includes/functions.php';
$csvPath = __DIR__ . '/games/games.csv';

$rows = read_csv_rows($csvPath);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV State</title>
</head>

<body>
    <table>
        <?php foreach ($rows as $row) {
            echo ("<td><?= esc_html($row[0]) ?></td>");
            echo ("<td><?= esc_html($row[1]) ?></td>");
            echo ("<td>$<?= esc_html(number_format((float)$row[2], 2)) ?></td>");
        } ?>
    </table>
</body>

</html>