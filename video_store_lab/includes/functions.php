<?php
function esc_html(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function read_csv_rows(string $path): array
{
    $rows = [];
    if (($h = fopen($path, 'r')) !== false) {
        while (($d = fgetcsv($h)) !== false) $rows[] = $d;
        fclose($h);
    }
    return $rows;
}

function write_csv_rows(string $path, array $rows): bool
{
    if (($h = fopen($path, 'w')) === false) return false;
    foreach ($rows as $r) fputcsv($h, $r);
    fclose($h);
    return true;
}
