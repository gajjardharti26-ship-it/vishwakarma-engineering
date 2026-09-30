<?php
$dirs = [
    __DIR__ . '/storage/framework/views/*',
    __DIR__ . '/bootstrap/cache/*.php'
];

foreach ($dirs as $dir) {
    $files = glob($dir);
    if ($files) {
        foreach($files as $file) {
            if(is_file($file)) {
                @unlink($file);
            }
        }
    }
}
echo "All views, config, and route caches successfully cleared.";

