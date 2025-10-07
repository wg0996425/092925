<?php
require_once __DIR__ . '/includes/functions.php';
$file = __DIR__ . '/data/games.csv';
if (!file_exists($file)) die("<p>No CSV found. <a href='index.php'>Upload one</a>.</p>");
$rows = read_csv_rows($file);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Games</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <h1 class="mb-4 text-center">Game List</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Console</th>
                        <th>Price</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $r): ?>
                        <tr>
                            <td><?= esc_html($r[0] ?? '') ?></td>
                            <td><?= esc_html($r[1] ?? '') ?></td>
                            <td><?= esc_html($r[2] ?? '') ?></td>
                            <td>
                                <?php if (!empty($r[3])): ?>
                                    <img src="img/<?= esc_html($r[3]) ?>" alt="" width="60">
                                <?php else: ?>
                                    <span class="text-muted">No image</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-secondary">Upload Another CSV</a>
        </div>
    </div>

</body>

</html>