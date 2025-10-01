<?php 
function esc_html(string $text): string { 
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8'); 
}

function read_csv_rows(string $path): array {
    if (is_file($path) === false) {
        return [];
    }

    $fp = fopen($path, 'rb');
    if ($fp === false) {
        return [];
    }

    $rows = [];
    while (!feof($fp)) {
        $row = fgetcsv($fp);
        if ($row === false) {
            continue;
        }
        $rows[] = $row;
    }

    fclose($fp);
    return $rows;
}

?>