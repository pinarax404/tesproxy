<?php

$context = stream_context_create([
    'http' => [
        'proxy' => '5.9.2.236:1080',
        'request_fulluri' => true
    ]
]);

$result = file_get_contents('http://ip-api.com/json/', false, $context);

echo $result;
