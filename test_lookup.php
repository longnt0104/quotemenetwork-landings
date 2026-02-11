<?php
require_once 'ZipLookup.php';

$zips = ['90210', '35004', '33160', '00000', '99999'];

foreach ($zips as $zip) {
    $start = microtime(true);
    $result = ZipLookup::lookup($zip);
    $end = microtime(true);
    $time = ($end - $start) * 1000;

    echo "ZIP: $zip\n";
    if ($result) {
        echo "Found: {$result['city']}, {$result['state']}, {$result['county']}\n";
    } else {
        echo "Not Found\n";
    }
    echo "Time: " . number_format($time, 4) . " ms\n";
    echo "---\n";
}
