<?php
// Test download using curl
$url = 'https://images.unsplash.com/photo-1533230392651-d306660f7725?auto=format&fit=crop&q=80&w=2000';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Ignore SSL errors
$data = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

echo "HTTP Code: $http_code\n";
echo "Curl Error: $error\n";
if ($data !== false) {
    echo "Data size: " . strlen($data) . " bytes\n";
} else {
    echo "Data is false\n";
}
?>
