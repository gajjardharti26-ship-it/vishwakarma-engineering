<?php
// PHP Script to Migrate Unsplash Images to Local assets
set_time_limit(0);
ini_set('memory_limit', '256M');

$viewsDir = realpath(__DIR__ . '/../resources/views');
$imagesDir = realpath(__DIR__ . '/assets/images');
$logFile = __DIR__ . '/migrate_log.txt';

if (!$viewsDir || !$imagesDir) {
    die("Directories not found!\nViews: " . var_export($viewsDir, true) . "\nImages: " . var_export($imagesDir, true));
}

function writeLog($msg) {
    global $logFile;
    echo $msg;
    file_put_contents($logFile, $msg, FILE_APPEND);
}

// Clear log
file_put_contents($logFile, "");

writeLog("Starting migration...\n");
writeLog("Views Directory: $viewsDir\n");
writeLog("Images Directory: $imagesDir\n\n");

// Recursive function to get all blade files
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
    
    // Find all unsplash urls
    preg_match_all('/https:\/\/images\.unsplash\.com\/[^\'"\s\)]+/', $content, $matches);
    
    if (empty($matches[0])) {
        continue;
    }
    
    $uniqueUrls = array_unique($matches[0]);
    writeLog("Found " . count($uniqueUrls) . " Unsplash URL(s) in: " . basename($file) . "\n");
    
    $modified = false;
    foreach ($uniqueUrls as $url) {
        // Extract photo ID
        $pathInfo = parse_url($url, PHP_URL_PATH);
        $filename = basename($pathInfo); // photo-1542332213-31f87348057f
        
        // Clean filename, append extension
        $cleanFilename = preg_replace('/[^a-zA-Z0-9\-_]/', '', $filename);
        if (empty($cleanFilename)) {
            $cleanFilename = md5($url);
        }
        $localFilename = 'unsplash-' . $cleanFilename . '.jpg';
        $localPath = $imagesDir . '/' . $localFilename;
        
        // Download the image if it doesn't exist
        if (!file_exists($localPath)) {
            writeLog("  Downloading: $url\n");
            writeLog("  Saving to: $localPath\n");
            
            // Set user agent to avoid bot blocking
            $opts = [
                'http' => [
                    'method' => 'GET',
                    'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36\r\n",
                    'timeout' => 10 // 10 seconds timeout per download
                ]
            ];
            $context = stream_context_create($opts);
            $imgData = @file_get_contents($url, false, $context);
            
            if ($imgData !== false) {
                file_put_contents($localPath, $imgData);
                writeLog("  Downloaded successfully.\n");
            } else {
                writeLog("  FAILED to download: $url\n");
                continue;
            }
        } else {
            writeLog("  File already exists locally: $localFilename\n");
        }
        
        // Replace in content
        $replacement = "{{ asset('assets/images/" . $localFilename . "') }}";
        $content = str_replace($url, $replacement, $content);
        $modified = true;
        $migrationCount++;
    }
    
    if ($modified) {
        file_put_contents($file, $content);
        writeLog("  Updated blade template: " . basename($file) . "\n");
    }
    writeLog("\n");
}

writeLog("Migration complete! Total replacements: $migrationCount\n");
?>
