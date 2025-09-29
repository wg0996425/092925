<?php


function getData() {
$filename = "stock.csv";
$csvPath = __DIR__ . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "stock.csv";

// Open the CSV file 'stock.csv' in read binary mode ('rb)

// check to see if the file is there
if (!is_file($csvPath)) {
    die("File not found: $filename");
}
$file = fopen($csvPath, 'rb');

// Initialize an empty array to store the CSV data
$stocks = array();

while (!feof($file)) {

    // Read a line from the CSV file and convert it into an array
    $stock = fgetcsv($file);

    // If the line is false (usually when the file ends or there's an error), skip this iteration
    if ($stock === false) continue;

    // Add the CSV line (now an array) to the stocks array
    $stocks[] = $stock;
}

fclose($file);
// print_r($stocks);
return $stocks;
}
