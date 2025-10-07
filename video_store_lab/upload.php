<?php
require_once __DIR__ . '/includes/functions.php';

if (!isset($_FILES['datafile'])) {
    die("No file uploaded. <a href='index.php'>Back</a>");
}

$file = $_FILES['datafile'];
if ($file['error'] !== UPLOAD_ERR_OK) die("Error: " . $file['error']);

$dir = __DIR__ . '/data';
if (!is_dir($dir)) mkdir($dir, 0755, true);
$path = $dir . '/games.csv';

if (!move_uploaded_file($file['tmp_name'], $path)) {
    die("Failed to save file.");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload Complete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light text-center py-5">
    <h2 class="mb-3 text-success">Upload Successful!</h2>
    <p><a href="view.php" class="btn btn-primary">View Games</a></p>
    <p><a href="index.php" class="text-decoration-none">Upload Another</a></p>
</body>

</html>