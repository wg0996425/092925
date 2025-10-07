<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload Games CSV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container text-center py-5">
        <h1 class="mb-4">Video Game Store</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data" class="border p-4 bg-white rounded shadow-sm mx-auto" style="max-width: 400px;">
            <div class="mb-3">
                <input type="file" name="datafile" accept=".csv" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Upload CSV</button>
        </form>
        <p class="mt-3"><a href="view.php" class="text-decoration-none">View Games</a></p>
    </div>

</body>

</html>