<?php

$options = array(
    'http' => array(
		'proxy' => '5.9.2.236:1080',
		'request_fulluri' => true,
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET'
    )
);

$context = stream_context_create($options);
$result = file_get_contents('http://ip-api.com/json/', false, $context);

echo $result;
