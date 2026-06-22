<?php
$url = 'https://images.unsplash.com/photo-1516773959-11850d87d3f4?auto=format&fit=crop&q=80&w=600';
$opts = [
    'http' => [
        'method' => 'GET',
        'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36\r\n"
    ]
];
$context = stream_context_create($opts);
$data = file_get_contents($url, false, $context);
if ($data !== false) {
    file_put_contents('assets/images/unsplash-photo-1516773959-11850d87d3f4.jpg', $data);
    echo "Success";
} else {
    echo "Fail";
}
?>
