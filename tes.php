<?php

$opts = array(
        'http'=>array(
            'method'=>"GET",
            'header'=>"Accept-language: en\r\n" .
            "Cookie: foo=bar\r\n",
            'proxy' => '5.9.2.236:1080',
            )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('http://ifconfig.me/ip', false, $context);

var_dump($file);
