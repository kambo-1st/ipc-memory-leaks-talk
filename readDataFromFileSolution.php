<?php
function get_data(string $file_path) : iterable {
    $file = fopen($file_path, 'r');
    while (($line = fgets($file)) !== false) {
        yield trim($line);
    }
}

$lines = get_data('heap.txt');
foreach ($lines as $line_number => $line) {
    if ($line === 'needle') {
        echo 'found at line: '.$line_number."\n";
        break;
    }
}

