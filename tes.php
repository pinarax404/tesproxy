<?php

$context = stream_context_create([
    'http' => [
        'proxy' => 'wf-us-015.whiskergalaxy.com:443',
        'request_fulluri' => true
    ]
]);

$result = file_get_contents('http://ip-api.com/json/', false, $context);

echo $result;
