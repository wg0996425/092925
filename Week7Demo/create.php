<?php
$data = array(
    ['GOOG', 'Google Inc.', '800'],
    ['AAPL', 'Apple Inc.', '500'],
    ['AMZN', 'Amazon.com Inc.', '250'],
    ['YHOO', 'Yahoo! Inc.', '250'],
    ['FB', 'Facebook, Inc.', '30'],
);

$path = __DIR__;
// echo($path);

$filename = __DIR__ . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "stock.csv";
echo($filename);

// open the STREAM for the CSV file named stock.csv
$file = fopen($filename, "wb");

if ($file === false) {
    echo ("error opening stream");
}
else {
    echo ("ready for input!");
}

// loop through the array and write each line to the CSV file
foreach ($data as $row) {
    fputcsv($file, $row);
}
// Always close the stream when finishing it 
fclose($file);