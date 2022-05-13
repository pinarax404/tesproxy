<?php

$context = stream_context_create([
    'socks5' => [
        'proxy' => 'wf-us-015.whiskergalaxy.com:443',
        'request_fulluri' => true
    ]
]);

$result = file_get_contents('https://ipwhois.app/json/', false, $context);

echo $result;
