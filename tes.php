<?php

$opts = array(
    'http'=>array(
        'method' => "GET",
        'socks5' => '5.9.2.236:1080',
    )
);

$context = stream_context_create($opts);

$file = file_get_contents('https://ipwhois.app/json/', false, $context);

echo $file;
