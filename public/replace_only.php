<?php
$viewsDir = realpath(__DIR__ . '/../resources/views');
$imagesDir = realpath(__DIR__ . '/assets/images');

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
    preg_match_all('/https:\/\/images\.unsplash\.com\/[^\'"\s\)]+/', $content, $matches);
    
    if (empty($matches[0])) continue;
    
    $uniqueUrls = array_unique($matches[0]);
    $modified = false;
    
    foreach ($uniqueUrls as $url) {
        $pathInfo = parse_url($url, PHP_URL_PATH);
        $filename = basename($pathInfo);
        $cleanFilename = preg_replace('/[^a-zA-Z0-9\-_]/', '', $filename);
        if (empty($cleanFilename)) $cleanFilename = md5($url);
        
        $localFilename = 'unsplash-' . $cleanFilename . '.jpg';
        $localPath = $imagesDir . '/' . $localFilename;
        
        if (file_exists($localPath)) {
            $replacement = "{{ asset('assets/images/" . $localFilename . "') }}";
            $content = str_replace($url, $replacement, $content);
            $modified = true;
            $migrationCount++;
            echo "Replaced in " . basename($file) . " -> $localFilename\n";
        } else {
            echo "Missing local file for $url in " . basename($file) . "\n";
        }
    }
    
    if ($modified) {
        file_put_contents($file, $content);
    }
}

echo "Total replacements: $migrationCount\n";
?>
