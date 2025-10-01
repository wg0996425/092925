<?php 
$path = __DIR__ . DIRECTORY_SEPARATOR . "games";
if (!file_exists($path)) {
    mkdir($path, 0755, true);
}

$games = array(
    ['name' => 'DOOM', 'console' => 'MSX', 'price' => '10.00'],
    ['name' => 'Gex 3', 'console' => 'N64', 'price' => '80.00'],
    ['name' => 'Untitled Game', 'console' => 'PSX', 'price' => '40.00'],
    ['name' => 'Diablo', 'console' => 'PSX', 'price' => '60.00']
);

$filename = __DIR__ . DIRECTORY_SEPARATOR . "games" . DIRECTORY_SEPARATOR . "games.csv";
$file = fopen($filename, "wb");

foreach ($games as $g) {
    fputcsv($file, [$g['name'], $g['console'], $g['price']]);
}
fclose($file);
echo ("Finished!");
?>