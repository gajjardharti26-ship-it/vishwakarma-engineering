<?php
$viewsDir = realpath(__DIR__ . '/../resources/views');

function getBladeFiles($dir) {
    $files = [];
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $path = $dir . '/' . $item;
        if (is_dir($path)) {
            $files = array_merge($files, getBladeFiles($path));
        } elseif (is_file($path) && str_ends_with($path, '.blade.php')) {
            $files[] = $path;
        }
    }
    return $files;
}

$bladeFiles = getBladeFiles($viewsDir);
$migrationCount = 0;

foreach ($bladeFiles as $file) {
    $content = file_get_contents($file);
    $originalContent = $content;
    
    // Replace all remaining unsplash urls with vessal.jpg
    $content = preg_replace('/https:\/\/images\.unsplash\.com\/[^\'"\s\)]+/', "{{ asset('assets/images/vessal.jpg') }}", $content);
    
    if ($content !== $originalContent) {
        file_put_contents($file, $content);
        $migrationCount++;
        echo "Replaced remaining Unsplash URLs in " . basename($file) . "\n";
    }
}

echo "Total files updated: $migrationCount\n";
?>
